 

<?php
///connection php page import for db connection
include  "connection.php";
 

 
//if submit button clicked
if(isset($_POST['submit'])){

  //get value
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

        //query
        //here crud= table name
        $sql = "insert into administrator (name,email,mobile,password) values ( '$name', '$email','$mobile','$password')";

        //run or die check
        $run = mysqli_query($con,$sql);

        if($run){
            //echo "Form Submitted successfully";
            //header('location:display.php');//redirect page ..go to display.php page
            echo "<script type='text/javascript'> alert('New Administrator added successfully.....') </script>";
        }
        else{
            die(mysqli_error($con));
            //echo 'Not submitted';

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

    <title>Admin Registration</title>
  </head>
  <body>
    <br><br><br><br>
    <center><h1>Registration As a Administrator !!!!</h1></center>
    <hr><hr>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button class="btn btn-primary my-  "> <a href="home.html" class="text-light">Back to home</a></button>
<div class="container my-5">
 
<form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"   placeholder="Enter your name" name="name" Required> 
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control"   placeholder="Enter your email" name="email" Required> 
  </div>
 
  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"   placeholder="Enter your mobile number" name="mobile" Required> 
  </div>

  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"   placeholder="Enter your password" name="password" Required> 
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
 
</form>
</div>
   
  </body>
</html>