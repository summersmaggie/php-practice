<?php
class PingPongGenerator {
  function generatePingPongArray($input_number) {
    $number = $input_number;
    $new_array = array();
    $counter = 1;

    while ($counter < $number ) {
      if ((($counter % 3) == 0) && (($counter % 5) == 0)) {
        array_push($new_array, "ping");
        $counter++;
      } elseif ((($counter % 5) == 0)) {
        array_push($new_array, "pong");
        $counter++;
      } elseif ((($counter % 3) == 0)) {
        array_push($new_array, "pingpong");
        $counter++;
      } else {
        array_push($new_array, $counter);
        $counter++;
      }
    }
    return $new_array;
  }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ping Pong</title>
</head>
<body>
    <h1>Ping Pong</h1>
    <ul>
        <?php
          $input_number = $_GET['number'];
          $my_PingPongGenerator = new PingPongGenerator;
          $results = $my_PingPongGenerator->generatePingPongArray($input_number);
          var_dump($results);
        ?>
    </ul>
</body>
</html>
