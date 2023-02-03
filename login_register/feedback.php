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
      <h1>Contact Us</h1>
      <p>Give your response here</p>
      <?php
        $Msg="";
        if(isset($_GET['error'])){
          $Msg="Please fill out required field";
          echo '<div class="alert alert-danger">'.$Msg.'</div>';

        }

        if(isset($_GET['success'])){
          $Msg="Your Messege has been sent";
          echo '<div class="alert alert-success">'.$Msg.'</div>';

        }


      
      
      
      ?>
      <!-- Form Start -->
      <form action="feedback.php" method="get">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="Email" id="first-name" >
        </div>
        <div class="form-group">
          <label for="password">Department</label>
          <input type="text" name="dept" id="last-name" >
        </div>

        <div class="form-group">
          <label for="password">Enter your response here</label>
          <input type="textmessege" name="Msg" id="last-name" >
        </div>
        <button type="submit" name="btn-send">Send Messege</button>
      </form>
      <!-- Form Close -->
    </div>
    <!-- Form Wrap Close -->
  </div>
  <!-- Container Close -->
</body>
</html>
