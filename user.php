<?php
include "connect.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "INSERT INTO crud (name, email, mobile, password) VALUES ('$name', '$email', '$mobile','$password')";

    $result=mysqli_query($con,$sql);
    if($result){
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
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" >
    
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
    
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off">
    
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>
    </div>

    
  </body>
</html>