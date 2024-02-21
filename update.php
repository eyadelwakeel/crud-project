<?php
include "connect.php";
$id=$_GET['updateid'];
$sql="SELECT * FROM crud WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "UPDATE crud set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id ";

    $result=mysqli_query($con,$sql);
    if($result){
        // echo "update successfully";
        header('Location: display.php');
    }else{
      echo('Error');
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>CRUD Project</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value=<?php echo $name; ?> >
    
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value=<?php echo $email; ?>>
    
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile" autocomplete="off" value=<?php echo $mobile ?>>
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off" value=<?php echo $password; ?>>
    
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit" >Update</button>
</form>
    </div>

    
  </body>
</html>