<?php include("config.php");
 ?>
 <?php
session_start();

?>
<?php
$userprofile = $_SESSION['user_name'];
if($userprofile == true)
{


}else
{
    header('location:index.php');

}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body{
    font-family: 'poppins';
    background-color: #ECEDEF;
    
    line-height: 1.8;
  }
  
  a{
    text-decoration: none;
  }
  
        #container{
    margin: 200px auto;
    max-width: 430px;
    padding: 20px; 

  }
  
  .form-wrap{
    background-color: #fff;
    padding: 15px 25px;
    color: #333;
    border-top: 4px solid #49c1a2;
    border-radius: 05px;
  }
  
  .form-wrap h1,
  .form-wrap p{
    text-align: center;
  }
  
  .form-wrap .form-group{
    margin-top: 15px;
  }
  
  .form-wrap .form-group label{
    display: block;
    color: #666;
  }
  
  .form-wrap .form-group input{
    width: 100%;
    padding: 10px;
    border: #ddd 1px solid;
    border-radius: 5px;
  }
  
  .form-wrap button{
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: #49c1a2;
    color: #fff;
    cursor: pointer;
    border: 1px solid #49c1a2;
    font-family: 'poppins';
    font-size: 15px;
    transition: 1s;
  }
  
  .form-wrap button:hover{
    background-color: #37a08e;
    transition: 1s;
  }
  
  .form-wrap .bottom-text{
    font-size: 13px;
    margin-top: 20px;
  }
  
    </style>
</head>
<body>
    <!-- Container Start -->
  <div id="container">
    <!-- Form Wrap Start -->
    <div class="form-wrap">
      <h1>Add Student Data Here</h1>
      <p>It Only takes a second</p>
      <!-- Form Start -->
      <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
          <label for="email">Upload Image</label>
          <input type="file" name="uploadfile">
        </div>
        <div class="form-group">
          <label for="email">FirstName</label>
          <input type="text" name="fname" id="first-name" >
        </div>
        <div class="form-group">
          <label for="password">LastName</label>
          <input type="text" name="lname" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Age</label>
          <input type="text" name="age" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Email</label>
          <input type="text" name="email" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Class</label>
          <input type="text" name="class" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">RollNo</label>
          <input type="text" name="rollno" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Address</label>
          <input type="text" name="address" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Phone</label>
          <input type="text" name="phone" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Control Id</label>
          <input type="text" name="controlid" id="last-name" >
        </div>
        <input type="submit" name="submit" value="submit">
      </form>
      <!-- Form Close -->
    </div>
    <!-- Form Wrap Close -->
  </div>
  <!-- Container Close -->
</body>
</html>

<?php
if($_POST['submit'])
{

    $filename =  $_FILES["uploadfile"]["name"];
    $tempname =  $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/".$filename;
    move_uploaded_file($tempname, $folder);
    //echo $folder;
    $fname      = $_POST['fname'];
    $lname      = $_POST['lname'];
    $age      = $_POST['age'];
    $email      = $_POST['email'];
    $class   = $_POST['class'];
    $rollno      = $_POST['rollno'];
    $address      = $_POST['address'];
    $phone      = $_POST['phone'];
    $controlid      = $_POST['controlid'];

    if($fname !="" && $lname !="" && $age !="" && $email !="" && $class !="" && $rollno !="" && $address !="" && $phone !="" && $controlid !="" )
    {

    $query = "INSERT INTO STUDENT(std_img,fname,lname,age,email,class,rollno,address,phone,controlid) VALUES('$folder','$fname','$lname', '$age', '$email','$class','$rollno','$address','$phone','$controlid')";
    $data = mysqli_query($conn,$query);

    if($data)
    {
      echo "<script>alert('Student Added Successfully')</script>";
      ?>
       <meta http-equiv = "refresh" content = "0; url = http://localhost/login_register/managestudent.php" />
      <?php

    }
    else
    {
        echo "failed";
    }
}
else{
  echo "<script>alert('Please Fill in the Blanks');</script>";
}

}


?>