<?php

  // check add or event number

  $number = 20;
  if ($number % 2 == 0){
    echo " This number is Event";
  }else{
    echo "This number is Odd number";
  }

  echo "</br>";

 //fegonachi serize usling forloop

 $firstNumber = 0;
 $secondNumber  = 1;
 $newNumber = 1;

 for($i = 0;$i<= 29; $i++){
   echo $firstNumber." ";
   $secondNumber = $newNumber;
   $newNumber = $secondNumber + $firstNumber;
   $firstNumber = $secondNumber;
 }

 echo "<p> Now Using FUnction </p>";



 function series($number){
   if($number == 0){
     return 0;
   }elseif( $number == 1){
     return 1;
   }else{
     return (series($number-1) + series($number-2));
   }
 }
 for ($i = 0; $i <= 10; $i++){
   echo (series($i));
 }
 ?>
