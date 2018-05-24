<?php
  $patient = $_GET["patient"];
  $transformed_patient = strrev($patient);
  $date = $_GET["date"];
  $time = $_GET["time"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Greetings!</title>
</head>
<body>
    <h1>Greetings From Afar</h1>
    <p>Dear <?php echo $transformed_patient ?>,</p>
    <p>Thanks for signing up for an appointment! </p>
    <p>Potential Date: <?php echo $date ?>. </p>
    <p>Potential Start Time: <?php echo $time ?>. </p>

    <p>We'll be in touch!</p>
</body>
</html>
