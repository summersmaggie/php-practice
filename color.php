<?php
  $color = $_GET["color"];
  $fortune = tellFortuneFromColor($color);

  function tellFortuneFromColor($fortune)
  {
      if ($fortune == "Red" || $fortune == "Orange" || $fortune == "Yellow") {
          return "Your lucky number is 17.";
      }
      elseif ($fortune == "Green" || $fortune == "Blue" || $fortune == "Violet") {
          return "You are a loyal and true friend.";
      }
      else {
          return "I do not know that color.";
      }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Guess My Number</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $fortune; ?></h1>

    </div>
</body>
</html>
