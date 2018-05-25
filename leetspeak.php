<?php
class LeetspeakTranslator {
  function translate($phrase) {

    $split_phrase = str_split($phrase);
    $translated_array = array();

    foreach ($split_phrase as $key => $value) {
      if ($value == 'e') {
        array_push($translated_array, "3");
      } elseif ($value == 'o') {
        array_push($translated_array, "0");
      } elseif ($value == 'I') {
        array_push($translated_array, "1");
      } elseif ($value == 's') {
        array_push($translated_array, "z");
      } else {
        array_push($translated_array, $value);
      }
    }
  $final_array = join('', $translated_array);
  return $final_array;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LeetSpeak</title>
</head>
<body>
    <h1>LeetSpeak</h1>
    <ul>
        <?php
          $phrase = $_GET['phrase'];
          $my_LeetspeakTranslator = new LeetspeakTranslator;
          $result = $my_LeetspeakTranslator->translate($phrase);

          echo "<p> $result </p>";
        ?>
    </ul>
</body>
</html>
