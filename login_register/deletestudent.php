<?php
include("config.php");
$id = $_GET['id'];

$query ="DELETE from student where id= '$id' ";
$data = mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Student Deleted Successfully')</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/login_register/display.php" />
    <?php
}
else{
    echo "failed";
   
}
?>