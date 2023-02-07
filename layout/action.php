<?php include "header.php";


$fname = $_POST ['fname'];
$lname = $_POST['lname'];
$dob = $_POST ['Birthday'];
$color = $_POST['colour'];

echo"<h3> Your name is $fname $lname. Your birthdate is: $dob. Your favourite colour is: $color </h3>";

?>

<?php include "footer.php" ?>