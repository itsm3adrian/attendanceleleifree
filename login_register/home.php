<?php include("config.php");
error_reporting(0);
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
  <meta charset="UTF-8" />
  <title>Attendance Dashboard</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="./images/OIP.jpg">
          <span class="nav-item">User</span>
        </a></li>
        <ul><a href="#"><i class="fas fa-user-plus"></i>
        <span class="nav-item">Student</span>
        <li><a href="addstudent.php"><i class=""></i>
          <span class="nav-item">Add Student</span>
        </a></li>
        <li><a href="managestudent.php"><i class=""></i>
          <span class="nav-item">Manage Student</span>
        </a></a></li></ul>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">View Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="feedback.php">
          <i class="fas fa-bell"></i>
          <span class="nav-item">Feedback</span>
        </a></li>

        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Attendance</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="./images/passport size photo.jpg">
          <h4>Vishal Ingale</h4>
          <p>Student</p>
          <div class="per">
            <table>
              <tr>
                <td><span>3945</span></td>
                <td><span>A013</span></td>
              </tr>
              <tr>
                <td>ID</td>
                <td>Roll No.</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="./images/NPRA.jpg">
          <h4>Prathamesh Kathwate</h4>
          <p>Student</p>
          <div class="per">
            <table>
              <tr>
                <td><span>3945</span></td>
                <td><span>A022</span></td>
              </tr>
              <tr>
                <td>ID</td>
                <td>Roll No.</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="./images/sid.jpg">
          <h4>Siddharth Karanjekar</h4>
          <p>Student</p>
          <div class="per">
            <table>
              <tr>
                <td><span>3945</span></td>
                <td><span>A002</span></td>
              </tr>
              <tr>
                <td>ID</td>
                <td>Roll No</td>
              </tr>
            </table>
          </div>
          <a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>
    
        </div>
        <div class="card">
          <img src="./images/nam.jpg">
          <h4>Namrata Kolekar</h4>
          <p>Student</p>
          <div class="per">
            <table>
              <tr>
                <td><span>3945</span></td>
                <td><span>A063</span></td>
              </tr>
              <tr>
                <td>ID</td>
                <td>Roll No</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
      </div>

      <section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Roll No.</th>
                <th>Control Id</th>
                <th>View Attendance</th>
                
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Vishal Ingale</td>
                <td>TYBSCIT</td>
                <td>3945A013</td>
                <td>2020080266</td>
                <td>Present<input type="radio" value="P" name="r1" >Absent<input type="radio" value="A" name="r1"></td>
              </tr>
              <tr >
                <td>02</td>
                <td>Siddharth Karandikar</td>
                <td>TYBSCIT</td>
                <td>3945A022</td>
                <td>2020065985</td>
                <td>Present<input type="radio" value="P" name="r2">Absent<input type="radio" value="A" name="r2"></td>
              </tr>
              <tr>
                <td>03</td>
                <td>Prathmesh Kathwate</td>
                <td>TYBSCIT</td>
                <td>3945A024</td>
                <td>2020080469</td>
                <td>Present<input type="radio" name="r3" value="P" >Absent<input type="radio" name="r3" value="A"></td>
              </tr>
              <tr>
                <td>04</td>
                <td>Namrata Kolekar</td>
                <td>TYBSCIT</td>
                <td>3945A063</td>
                <td>2020060955</td>
                <td>Present<input type="radio" value="P" name="r4">Absent<input type="radio" value="A" name="r4"></td>
              </tr>
             <tr >
                <td>05</td>
                <td>Kaivalya Kachale</td>
                <td>TYBSCIT</td>
                <td>3945A017</td>
                <td>2020030699</td>
                <td>Present<input type="radio" value="P" name="r5">Absent<input type="radio" value="A" name="r5"></td>
              </tr>
              <tr >
                <td>06</td>
                <td>Shubham Parab</td>
                <td>TYBSCIT</td>
                <td>3945A036</td>
                <td>2020036988</td>
                <td>Present<input type="radio" value="P" name="r6">Absent<input type="radio" value="A" name="r6"></td>
              </tr> 
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>
