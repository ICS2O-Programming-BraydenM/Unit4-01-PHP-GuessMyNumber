<?php
// This function displays a statement to see whether or not you guessed the program's correct randomly generated number 
 
  // ge user input
  $number = $_POST['number'];

 // declare constants
 define (min,1);
 define (max,6);

 $correct = rand(min,max);

  // if statements, if number is correct, display a message that tells them so, if number is incorrect, display a message that tells them so
  if ($number == $correct) {
    echo "You are right, that is the correct random number";
  }

  else {
    echo "Nope, wrong number. Try again. " . "The correct number is " . $correct . ".";
  }
?>


