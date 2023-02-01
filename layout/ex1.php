 
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

    <h1> Write the PHP code in to display the current date. </h1>

<?php
echo date("d.m.Y");
?>

    <h1>Variables in PHP </h1>
    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1>";
    ?>

    <h1> Table and variables </h1>
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


</div>
<?php include "footer.php" ?>

