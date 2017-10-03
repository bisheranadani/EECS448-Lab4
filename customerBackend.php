<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Purchase</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <h1>Thanks for your purchase!</h1>
  <?php
  $labels = array($_POST["banana"],$_POST["apple"],$_POST["kiwi"],$_POST["radio"],$_POST["ship"]);
  echo "<h2>Username: </h2>" . '<p id="info">' . $_POST["username"] . "</p>";
  echo "<h2>Password: </h2>" . '<p id="info">' . $_POST["password"] . "</p>";
  echo "<br>";

  echo "<table>";
  echo "<tr>";
  echo "<td></td>" . "<td>Quantity</td>";
  echo "<td>Cost-per-item</td>";
  echo "<td>Sub-total</td>";

  echo "</tr>";

  $totalc = 0;
  echo "<h2>Receipt</h2>";
  for($i=0; $i < 3; $i++){
    $item = "";
    $cost = 0;
    $cpi = 0;
    if($i==0){
      $item = "Banana";
      $cpi = 20;
      $cost = $labels[$i] *$cpi;
    }
    if($i==1){
      $item = "Apple";
      $cpi = 75;
      $cost = $labels[$i] *$cpi;
    }
    if($i==2){
      $item = "Kiwi";
      $cpi = 150;
      $cost = $labels[$i] *$cpi;
    }
    $totalc = $totalc + $cost;
    echo "<tr>";
    echo "<td>$item</td>";
    echo "<td>" . $labels[$i] . "</td>";
    echo "<td>" . $cpi . "</td>";
    echo "<td>" . $cost . "</td>";
    echo "</tr>";
  }
  echo '<tr>';
  echo '<td colspan="3">' . "Total Cost" . "</td>";
  echo "<td>" . $totalc . "</td>";
  echo '</tr>';
  echo "</table>";

  ?>
</body>
</html>
