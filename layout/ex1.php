 
    <?php $title = "Exercise1"; 
    include "header.php" ?>

<div class = "text">
    <h1> Write a simple PHP script to print your information (Name and your groupid) </h1>
<?php
echo "Keita Brudere <br>";
echo "BBCAP22";


?>
    <h1>Write PHP code to display the following message.</h1>
<?php
echo "Hello World ! My name is \" Keita \"";
?>
<br>

<script>
document.write("Hello world, this is Java Script");

</script>
<noscript>
    Please enable JavaScript to view this content.
</noscript>
<input type="button" onclick="hello()" value="Click Me">


    <h1> Write the PHP code in to display the current date. </h1>

<?php
echo date("d.m.Y");
?>

    <h1>Variables in PHP </h1>
    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1>";
    ?>
<script>
    //window.alert
   // window.alert("This will trigger an alert box");
   // window.alert(5+8);

   //document.write
   document.write("Hello, this is interesting");
    </script>

    <h1> Table and variables </h1>
    <button onclick="add()" > Click to add numbers </button>
    <hr>
    <p id="place1" style="color:red; background-color:yellow;"> </p>
    <span id="place2" style="color:purple; background-color:violet;"> </span>
    <script>
        document.getElementById("place1").innerHTML = "This will go to place1";
        document.getElementById("place2").innerHTML="This will go to span"
    </script>
<?php

$g1 = 5;
$g2 = 4;
$g3 = 5;

echo "
<table>
<tr>
<th> S.N </th> <th> Name </th> <th> Grade </th>
</tr>
<tr>
<td> 1 </td> <td> Pekka </td> <td> $g1 </td>
</tr>
<tr>
<td> 2 </td> <td> Johanna </td> <td> $g2 </td>
</tr>
<tr>
<td> 3 </td> <td> John </td> <td> $g3 </td>
</tr>
</table>
"
?>

<h1> Screenshot Task </h1>
<img src="proof.png" width=700px>

<h2> Changing background-color </h2>
<form>
    <input type="color" name="background" onchange="changeColor('background', this.value)">
</form>
</div>
<?php include "footer.php" ?>


