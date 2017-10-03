<?php
//access the global array called $_POST to get the values from the text fields
$labels = array($_POST["color-label"],$_POST["city-label"],$_POST["drink-label"],$_POST["animal-label"],$_POST["lang-label"]);
$corrects = array("Green", "New York", "Juice", "Hippopotamus", "C++");
$answers = array($_POST["color"],$_POST["city"],$_POST["drink"],$_POST["animal"],$_POST["lang"]);
$score = 0;

for($i=0; $i<5; $i++){
  echo "Question: " . $labels[$i] . "<br>";
  echo "Your Answer: " . $answers[$i] . "<br>";
  echo "Correct Answer: " . $corrects[$i] . "<br>";
  $j = $i+1;
  if($answers[$i] == $corrects[$i]){
    $score =$score+20;
    echo "You got question " . "$j" . " right!";
    echo "<br>";
  }
  else{
    echo "You got question " . "$j" . " wrong, Sad!";
    echo "<br>";
  }

  echo "<br>";
}

echo "Final score: " . "<b>" . "$score" . "% </b>";

?>
