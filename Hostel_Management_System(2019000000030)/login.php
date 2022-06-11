

<?php
 
 ///connection php page import for db connection
 include  "connection.php";
 
 ///delete
 //get value from display.php 
 if(isset($_POST['login'])){
 
      //get value
      $name=$_POST['name'];
      $password=$_POST['password'];
 
    
     //sql query
     
     $sql= "SELECT * FROM administrator WHERE name='$name' and password='$password'";
     $run=mysqli_query($con,$sql);
     $count=mysqli_num_rows($run);
 
     if($count==1){
        // echo "Login  successfully";
      
        echo "<script type='text/javascript'> alert('Login Successful.....') </script>";
        header('location:adminpage.html');//redirect page ..go to display.php page
     }
     else{
         //die(mysqli_error($con));
         //echo 'Not Deleted';
         echo "<script type='text/javascript'> alert('Login error.....') </script>";
     }
 }
 
 
 
 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>


      body{
        margin: 0px;
    padding: 0px;
    background-image: url(log.jpg);
    background-size:cover;
    overflow: hidden;
    height:100vh ;
      }

            .main{
              margin: auto;
              margin-top:300px;
            }


            .label{
              color: white;
              font-size:20px;
            }
            .label1{
              color: white;
              font-size:15px;
            }

       
            .main{
              margin-left:150px;
            }
            .main a{
              text-decoration :none;
            }

    </style>


    <title>Log In</title>
  </head>
  <body>
   
  
  <div class="main">

  <button class='btn btn-danger' >  <a href=home.html  class='text-light'>Back to home</a></button>
  <hr>
  <br>
  </div>

 <center class="label"><h1> <u>Welcome to Login form</u></h1></center>
  
<div class="container my-5">
<form method="post">
  <div class="form-group">
    <label class="label">Name</label>
    <input type="text" class="form-control"   placeholder="Enter your name" name="name"> 
  </div>

 

  <div class="form-group">
    <label class="label" >Password</label>
    <input type="password" class="form-control"   placeholder="Enter your password" name="password"> 
  </div>


  <button type="submit" class="btn btn-primary" name="login">Login</button>
  <a href="adminreg.php"  class="label1">Create new account?</a>

 
</form>
</div>
 
  </body>
</html>