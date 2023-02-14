<?php
$title = "Update your info";
include '../layout/header.php';
$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn, "Select * from studentinfo where id='$a' ");
$row = mysqli_fetch_array($result);
?>
<h2> Update Information Below </h2>
<form name = "update" method="post" action="">
<input type="text" name="fname" placeholder="First Name" required value="<?php echo $row['fname']; ?> ">
    <input type="text" name="lname" placeholder="Last Name" required value="<?php echo $row['lname']; ?> ">
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city']; ?> ">
    <select name="groupid" value="<?php echo $row['groupid']; ?> ">
        <option value="BBCAP22">BBCAP22 </option>
        <option value="BBCAP21">BBCAP21 </option>
        <option value="others">Others </option>
    </select>
    <input type="submit" value="Update" name="update">
    <input type="submit" value="Delete" name="delete">
</form>

<?php 
if (isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname', lname='$lname', city='$city', groupid='$groupid' where id='$a' ");

    if($query){
        echo "<h2> Your information is update successfully </h2>";
    }
    else {
        echo "Record not modified";
    }
}
?>


<?php
include '../layout/footer.php';
?>