<title>Sameer Lalwani b1256485</title>
<h1>Welcome to my guessing game</h1>
<?php
if(isset($_GET['guess']) == false)
 {
   echo "Missing guess parameter";
 }
else if (empty($_GET['guess'])) 
 {
   echo "Your guess is too short";
 }
else
 {
  if (is_numeric($_GET['guess']) == true)
   {
    if ($_GET['guess'] == "18")
     {
       echo "Congratulations - You are right";
     }
    else if ($_GET['guess'] > "18")
     {
       echo "Your guess is too high";
     }
    else if ($_GET['guess'] < "18")
     {
       echo "Your guess is too low";
     }
   }
  else
   {
     echo ("Your guess is not a number");
   }
 }
 
?>