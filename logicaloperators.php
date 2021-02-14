<?php 
 $age = 18;
 $AGE =17;

 if ($age >=20 && $age <= 24) { // both conditions true then print kry ga
    echo "you re good <br>";
 }

 if ($age >= 21 || $age <=25){ // only one condition is true then print kry ga
     echo "your age is not good <br>";
 }

 if ($age >= 20 xor $age <= 21){ //both true/false ans false other wise true

    echo "Your Age Is Good For This JOB! <br>";
 }

 if (!($age <21)){
  echo "tou are not eligible <br>"; // jo condition hogi uska ulta return kry ga
 }

// if else condition


if($AGE >=18){
    echo "YOU ARE ADULT";

} else{
    echo "YOU ARE NOT ADULT";
}

?>