<?php
session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: rgb(226, 226, 226);
        }
        table
        {
            background-color: white;

        }
        .update, .delete
        {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 23px;
            width: 80px;
            font-weight: bold;
            cursor:pointer; 

        }
        .delete
        {
            background-color: red;
           
        }
        
    </style>
</head>
<body>
    

<?php include("config.php");

$userprofile = $_SESSION['user_name'];
if($userprofile == true)
{


}else
{
    header('location:index.php');

}
$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



//echo $total; 
if($total !=0){
    ?>
    <center><table border="1"cellspacing="7" widht="100%">
        <tr>
            <th widht="5%">id</th>
            <th widht="5%">Image</th>
            <th widht="10%">First Name</th>
            <th widht="10%">Last Name</th>
            <th widht="10%">Age</th>
            <th widht="10%">Email</th>
            <th widht="5%">Class</th>
            <th widht="5%" >Roll No</th>
            <th widht="10%">Address</th>
            <th widht="10%">Phone</th>
            <th widht="10%">Control id</th>
            <th widht="25%">Operations</th>
        </tr>
    


    <?php
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
        <td>".$result['id']."</td>
        <td><img src= '".$result['std_img']."' height='100px' width='100px'></td>
        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['age']."</td>
        <td>".$result['email']."</td>
        <td>".$result['class']."</td>
        <td>".$result['rollno']."</td>
        <td>".$result['address']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['controlid']."</td>
        <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>
        <a href='deletestudent.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
        
    </tr>";
    }

}else{
    echo "no  record found";
}


?>
</table>
</center>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to Delete this Record?');

    }
</script>