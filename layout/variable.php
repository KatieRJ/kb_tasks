<?php include "header.php" ?>

<div class = "text">
<h3> 3rd In-class Task Variable & Operators 07.02.2023 (variable.php) </h3>

<h2> 1.st Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using tag. </h2>

<form action="action.php" method="post">
<div class="row">

<div class="col">
<input type="text" name="fname" required placeholder="First Name" class="form-control"> </div>

<div class="col">
<input type="text" name="lname" required placeholder="Last Name" class="form-control"> </div>

Date: <input type="date" name="Birthday" required> <br>
Select favourite colour: <input type="color" name="colour" required> <br>
<input type="submit" value="Submit">

</form>

<h2> 3. Prepare a simple html table and apply bootstrap style to the table. </h2>


<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<h2> 4.Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)</h2>
<?php

$name = "Katie";
$city = "London";

echo $name . " " . $city;
echo " <br> The lenght of " . $name . " is " . strlen($name);

?>

<h2> 5.Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer. </h2>
<?php
$number1 = 298;
$number2 = 234;
$number3 = 46;

echo $number1 + $number2 + $number3;

?>

<h2> 6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER) </h2>
<?php
$host = $_SERVER['HTTP_USER_AGENT'];
echo $host;

?>




</div>
<?php include "footer.php" ?>
