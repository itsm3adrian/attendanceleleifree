<?php include("config.php"); ?>
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
  <link rel="stylesheet" href="styles.css">
  <title>Registration Form</title>
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body{
    font-family: 'poppins';
    background: rgb(226, 226, 226);
    
    line-height: 1.8;
  }
  
  a{
    text-decoration: none;
  }
  
  #container{
    margin-top:30px;
    margin-left:600px;
    max-width: 800px;
    padding: 50px;

      }

  
  .form-wrap{
    background-color: #fff;
    padding: 15px 25px;
    color: #333;
    border-top: 4px solid #49c1a2;
    border-radius: 05px;
    border-bottom: 4px solid #49c1a2;
  }
  
  .form-wrap ,h1
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
  
  footer {
    text-align: center;
    margin-top: 10px;
    color: #333;
  }
  
  footer a {
    color:#49c1a2
  }
  .header {
    margin-left: 10rem;
   
  }
  .name {
    margin-left: 20rem;
   
  }
  body {
  
}
  </style>
</head>
<body>
  
    <!-- Container Start -->
  <div id="container">
    <!-- Form Wrap Start -->
    <div class="form-wrap">
      <h1>Add Here</h1>
      <p>It's Free and Only takes a minute</p>
      <!-- Form Start -->
      <form action="" method="POST">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" name="fname" id="first-name" required>
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" name="lname" id="last-name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="first-name" required>
        </div>
        <div class="form-group">
          <label for="cpass">Confirm Password</label>
          <input type="password" name="cpass" id="first-name" required>
        </div>
        <div class="form-group">
          <label for="sub">Subject Name</label>
          <input type="text" name="sname" id="first-name" required>
        </div>
        <div class="form-group">
          <label for="sub">Phone Number</label>
          <input type="text" name="phone" id="first-name" required>
        </div>
        
        <div class="btn">
          <input type="submit" name="submit"></button>
        </div>
        

        
        <hr>
       
        <p class="bottom-text">
          By Clicking the Register Button, you agree to our
          <a href="#">Term & Conditions</a> and <a href="#">Privacy Policy</a>
        </p>
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
        $fname      = $_POST['fname'];
        $lname      = $_POST['lname'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $cpass      = $_POST['cpass'];
        $sname      = $_POST['sname'];
        $phone      = $_POST['phone'];

        if($fname !="" && $lname !="" && $email !="" && $password !="" && $cpass !="" && $sname !="" && $phone !="" )
        {

        $query = "INSERT INTO TEACHER VALUES('$fname','$lname','$email','$password','$cpass','$sname','$phone')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "<script>alert('Teacher Added Successfully')</script>";
            ?>
       <meta http-equiv = "refresh" content = "0; url = http://localhost/login_register/dashboard.php" />
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