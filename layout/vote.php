
<?php include "header.php" ?>
<div class = "text">


<?php
    $age = $_POST['age'];
    if ($age >= 18){
    echo "You are eligible to vote!";
    }
    else{
    echo "You are not eligible to vote.";
    }
?>


<?php include "footer.php" ?>