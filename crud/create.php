<?php
$title = "A simple CRUD app";
include '../layout/header.php';
?>
<div class = "text">

<form method="post" action="" onsubmit="return crud()" name="form1">
    <input type="text" name="fname" placeholder="First Name" required onblur="fname()">
    <input type="text" name="lname" placeholder="Last Name" required>
    <input type="text" name="city" placeholder="City" required>
    <select name="groupid">
        <option value="BBCAP22">BBCAP22 </option>
        <option value="BBCAP21">BBCAP21 </option>
        <option value="others">Others </option>
    </select>
    <input type="submit" value="Submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    include "db.php";
    $sql = "insert into studentinfo(fname,lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";

    if ($conn->query($sql) === TRUE){
        echo "Your information has been added successfully";
    }

    else {
        

        echo "Error: " . $conn->error;
    }

}

?>
</div>

<?php
include '../layout/footer.php';
?>