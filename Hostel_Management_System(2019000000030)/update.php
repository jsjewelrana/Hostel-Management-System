
<?php
///connection php page import for db connection
include  "connection.php";
 
$id=$_GET['update_Id'];

//show in form
$sql="select * from crud where id=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
 $iD=$row['id'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


///update
//if update button click
if(isset($_POST['submit'])){
 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

        //query
        //here student= table name
        $sql = "update crud  set id=$id,name='$name',email='$email',mobile='$mobile',password='$password '  where id=$id"; //here id=$id ..is from key ...get from display.php

        //run or die check
        $run = mysqli_query($con,$sql);


        if($run){
            echo "Updated  successfully";
            header('location:display.php');//redirect page ..go to display.php page
        }
        else{
            die(mysqli_error($con));
            echo 'Not submitted';
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

    <title>User Interface</title>
  </head>
  <body>
  <br><br><br><br>
    <center><h1>Update Customer info  !!!!</h1></center>
    <hr><hr>
     
<div class="container my-5">
<form method="post">
<div class="form-group">
    <label >Serial Id</label>
    <input type="text" class="form-control"     name="id" value=<?php echo $iD; ?> >  
  </div>

  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"   placeholder="Enter your name" name="name" value=<?php echo $name; ?> >  
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control"   placeholder="Enter your email" name="email"  value=<?php echo $email; ?>> 
  </div>
 
  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"   placeholder="Enter your mobile number" name="mobile"  value=<?php echo $mobile; ?>> 
  </div>

  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"   placeholder="Enter your password" name="password"  value=<?php echo $password; ?>> 
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Update</button>

   
</form>
</div>
   

<div>
 

</div>
  </body>
</html>