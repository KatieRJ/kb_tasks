<?php include "header.php" ?>
<div class = "text">

<h1> Calculator </h1>
<form action="" method="get">
    <input type="number" name="input1" placeholder="Enter your first number" required>
    <input type="number" name="input2" placeholder="Enter your second number" required>
<select name="operator">
    <option value="add"> Add </option>
    <option value="sub"> Substract </option>
    <option value="mul"> Multiply </option>
    <option value="div"> Divide </option>
</select>
    <input type="submit" name="calc" value="Calculate"> 
</form>


<?php
    if (isset($_GET["calc"])){
        $input1 = $_GET["input1"];
        $input2 = $_GET["input2"];
        $operator = $_GET["operator"];
        switch($operator){
            case "add":
                $result = $input1 + $input2;
                break;
            case "sub":
                $result = $input1 - $input2;
                break;
            case "mul":
                $result = $input1 * $input2;
                break;
            case "div":
                $result = $input1 / $input2;
                break;

            default:
                $result = "Error: You have not selected the correct operator";
         }
    }

    if (isset($result)){
        echo "<h1> Result: $result </h1>";
}   
?>

<h1> 1. Write a php script to display courses as list. Use < li > </h1> 

<?php
    $courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
    $num = count($courses);

    for ($i = 0; $i <5; $i++){
        echo "<li>$courses[$i]";
    }
?>

<h1> 2. Delete an element from the array below: <br>
    $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project"); </h1>
 
<?php
echo "deleted \"JavaScript\"<br>";
    $courses2=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses2[2]);
var_dump($courses2);
?>

<h1> 3. Sort the following array<br> 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project"); <br>
a) ascending order sort by value <br>
b) ascending order sort by Key <br>
c) descending order sort by Value <br>
d) descending order sort by Key <br>
 </h1>

 <?php
echo "a) <br>";
$courses3=array("PHP" => "0", "HTML" => "1", "JavaScript" => "2", "CMS" => "3", "Project" => "4");
asort($courses3);

foreach ($courses3 as $x=>$x_value) {
    echo "Key= " . $x . ", Value= " . $x_value;
    echo "<br>";
}

echo "b) <br>";
$courses3=array("PHP" => "0", "HTML" => "1", "JavaScript" => "2", "CMS" => "3", "Project" => "4");
ksort($courses3);

foreach ($courses3 as $x=>$x_value) {
    echo "Key= " . $x . ", Value= " . $x_value;
    echo "<br>";
}

echo "c) <br>";
$courses3=array("PHP" => "0", "HTML" => "1", "JavaScript" => "2", "CMS" => "3", "Project" => "4");
arsort($courses3);

foreach ($courses3 as $x=>$x_value) {
    echo "Key= " . $x . ", Value= " . $x_value;
    echo "<br>";
}

echo "d) <br>";
$courses3=array("PHP" => "0", "HTML" => "1", "JavaScript" => "2", "CMS" => "3", "Project" => "4");
Krsort($courses3);

foreach ($courses3 as $x=>$x_value) {
    echo "Key= " . $x . ", Value= " . $x_value;
    echo "<br>";
}
?>

<h1> 4. Change the following array's all values to upper case. <br>
 $courses4=array("php", "html", "javascript", "cms", "project"); </h1>
 <?php
$courses4=array("php" => "0", "html" => "1", "javascript" => "2", "cms" => "3", "project" => "4");
print_r(array_change_key_case($courses4,CASE_UPPER))
?>

<h1>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays) </h1>
<?php
$colors=array("Blue" => "#0000FF", "Yellow" => "#FFFF00", "Green" => "#008000");
print_r($colors);
?>

<h1>6. PHP script to calculate and display average temperature, five lowest and highest temperatures. </h1>
<?php
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
//explode breaks a string into an array. Therefore, the code below creates an array (temp_array).
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
//"count" counts all the elemnts in the array presented.
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
//"sort" sorts the variables depending on how it is asked - lowest to highest or highest to lowest
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
//the following loop writes out all the temperatures in the array until the last
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

?>

<?php include "footer.php" ?>