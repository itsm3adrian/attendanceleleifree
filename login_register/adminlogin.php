<?php
  session_start();
  error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
    border-bottom: 4px solid #49c1a2;
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
  .link {
      padding: 4px 0;
      margin:3px;
      text-align: center;
      
  }
  .fpass {
      text-align: center;
      padding: 4px 0;
      margin:2px;
      
  }
  
    </style>
</head>
<body>
    <!-- Container Start -->
  <div id="container">
    <!-- Form Wrap Start -->
    <div class="form-wrap">
      <h1>Admin Login</h1>
      <p>It Only takes a second</p>
      <!-- Form Start -->
      <form action="" method="POST">
        <div class="form-group">
          <label for="email" >Username</label>
          <input type="text" placeholder="Username" name="username" id="first-name" required>
        </div>
        <div class="form-group">
          <label for="password" >Password</label>
          <input type="password" placeholder="Password" name="password" id="last-name" required>
        </div>
        <div class="fpass"><a href="resetpass.php" onclick="messege()">Forgot Password</a></div>
          
        
        <div class="btn">
          <button type="submit" name="login">Login</button>
        </div>
       

      </form>
      <!-- Form Close -->
    </div>
    <!-- Form Wrap Close -->
  </div>
  <!-- Container Close -->
  <script>
    function messege(){
      alert("Kaise bhul jate ho yrr");
    }
  </script>
</body>
</html>
<?php
    include("config.php");
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        $query = "SELECT * FROM ADMIN WHERE email = '$username' && password = '$pwd' ";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        //echo $total;

        if($total == 1)
        {
          $_SESSION['user_name'] = $username;

          header('location:dashboard.php');


        }else
        {
          echo "<script>alert('Login Failed')</script>";

        }

    }



?>