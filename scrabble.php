<?php
class ScrabbleConverter {
  function scrabbleConvert($input_word) {

    $counter = 0;
    $split_string = str_split($input_word);

    foreach ($split_string as $key => $value) {
      if ($value == 'a' || $value == 'e' || $value == 'i' || $value == 'o' || $value == 'u' || $value == 'l' || $value == 'n' || $value == 'r' || $value == 's' || $value == 't') {
        $counter++;
      } elseif ($value == 'd' || $value == 'g') {
        ($counter += 2);
      } elseif ($value == 'b' || $value == 'c' || $value == 'm' || $value == 'p') {
        ($counter += 3);
      } elseif (($value == 'f') || ($value == 'h') || ($value == 'v') || ($value == 'w') || ($value == 'y')) {
        ($counter += 4);
      } elseif ($value == 'k') {
        ($counter += 5);
      } elseif (($value == 'j') || ($value == 'x')) {
        ($counter += 8);
      } elseif ($value == 'q') {
        ($counter += 10);
      } elseif ($value == 'z') {
        ($counter += 10);
      }
    }
    return $counter;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Scrabble</title>
</head>
<body>
    <h1>Scrabble</h1>
        <?php
          $input_word = $_GET['word'];
          $my_ScrabbleConverter = new ScrabbleConverter;
          $results = $my_ScrabbleConverter->scrabbleConvert($input_word);

          echo " <p> Your scrabble score is $results! </p> ";
        ?>
</body>
</html>
