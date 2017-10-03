<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Multiplier</title>
  <style media="screen">
    th, td{
      border: 1px solid black;
    }
    td{
      padding: 2px;
    }
  </style>
</head>
<body>
  <?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo "<h1>" . "Multiplication table 100 x 100" . "</h1>";

  echo "<table>";

  for($i=1; $i<=100; $i++){
    echo "<tr>";
    for($j=1; $j<=100; $j++){
      $l = $i*$j;
      echo "<td>" . "$l" . "</td>";
    }
    echo "</tr>";
  }

  echo "</table>";

  ?>

</body>
</html>
