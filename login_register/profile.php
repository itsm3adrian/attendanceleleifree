<?php
session_start();

?>
<?php include("config.php");
$id = $_GET['id'];
$userprofile = $_SESSION['user_name'];
if($userprofile == true)
{


}else
{
    header('location:login.php');

}
$query = "SELECT * FROM STUDENT where id= '$id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);


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
    background: rgb(226, 226, 226);
    
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
      <h1>Update Student Data Here</h1>
      <p>It Only takes a second</p>
      <!-- Form Start -->
      <form action="" method="POST">
        <div class="form-group">
          <label for="email">FirstName</label>
          <input type="text" value="<?php echo $result['fname'] ?>" name="fname" id="first-name" >
        </div>
        <div class="form-group">
          <label for="password">LastName</label>
          <input type="text" value="<?php echo $result['lname'] ?>" name="lname" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Age</label>
          <input type="text" value="<?php echo $result['age'] ?>" name="age" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Email</label>
          <input type="text" value="<?php echo $result['email'] ?>" name="email" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Class</label>
          <input type="text" value="<?php echo $result['class'] ?>" name="class" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">RollNo</label>
          <input type="text" value="<?php echo $result['rollno'] ?>" name="rollno" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Address</label>
          <input type="text" value="<?php echo $result['address'] ?>" name="address" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Phone</label>
          <input type="text" value="<?php echo $result['phone'] ?>" name="phone" id="last-name" >
        </div>
        <div class="form-group">
          <label for="password">Control Id</label>
          <input type="text" value="<?php echo $result['controlid'] ?>" name="controlid" id="last-name" >
        </div>
        <input type="submit" name="update" value="submit">
      </form>
      <!-- Form Close -->
    </div>
    <!-- Form Wrap Close -->
  </div>
  <!-- Container Close -->
</body>
</html>

<?php
if($_POST['update'])
{
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

    

    $query = "UPDATE student set fname='$fname',lname='$lname', age='$age', email='$email', class='$class', rollno='$rollno', address='$address', phone='$phone', controlid='$controlid' WHERE id='$id'";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Student Updated Successfully')</script>";
        ?>
         <meta http-equiv = "refresh" content = "0; url = http://localhost/login_register/display.php" />
        <?php
       

    }
    else
    {
        echo "failed to update";
    }
}
else{
  echo "<script>alert('Please Fill in the Blanks');</script>";
}

}


?>