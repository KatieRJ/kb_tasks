<?php include "header.php" ?>
<div class = "text">

<h3> 4th In-class Task Control flow and loops 08.02.2023 (controlflow.php) </h3>
<h2> 1.  Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not: <br>
It's August, so it's still holiday. <br>
Not August, this is Month-name so I don't have any holidays <br> </h2>

<?php
$d = date("F");
echo date ("F");

if ($d == "Aug") {
    echo "It's August, therefore it is still a holiday." ;
}
else {
    echo " It's not August, it's $d, so I do not have any holidays " ;
}
?>

<h2> 2.Assign colour red to a variable name $color and check to print one the following responses (if else statement) </h2>
<?php

$color = "red";
if ($color == "red"){
    echo "The colour is red";
}
else {
    echo "The colour is not red";
}
?>

<h3> 3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. </h3>
<?php

$grade = 90;
if ($grade >= 80){
    echo "Excellent";
}

else if ( $grade >= 70 && $grade < 80 ){
    echo "Great";
}

else if ( $grade >= 60 && $grade < 70 ){
    echo "Good";
}

else if ( $grade >= 50 && $grade < 60 ){
    echo "Pass";
}

else if ( $grade < 50 ){
    echo "Fail";
}
?>

<h3> 4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting </h3>

<form action="vote.php" method="post">
    <input type="txt" name="name" required placeholder="Name" class="form-control" required>
    <input type="number" name="age" required placeholder="Age" class="form-control" required>
    <input type="submit" value="Submit"> 
</form>

<h2> 5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. <br>
Use Switch statement with strops function to print the name of the browser as below:  <br>
If someone is using Chrome it should print, you are using Goolge Chrome…. <br> </h2>

<?php
$host = $_SERVER['HTTP_USER_AGENT'];
echo $host;

if (strpos($host, 'Edg') == true){
  echo ' You are using Microsoft Edge.';
} elseif (strpos($host, 'Firefox') == true){
  echo ' You are using Mozilla Firefox.';
} elseif (strpos($host, 'OPR') == true) {
  echo ' You are using Opera.';
} elseif (strpos($host, 'Chrome') == true) {
  echo ' You are using Google Chrome.';
} 
else {
    echo 'We could not detect your browser.';
}
?>


<?php include "footer.php" ?>