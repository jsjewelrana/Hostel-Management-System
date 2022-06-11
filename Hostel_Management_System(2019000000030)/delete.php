<?php
 
///connection php page import for db connection
include  "connection.php";

///delete
//get value from display.php 
if(isset($_GET['delete_Id'])){

    $delete_Id=$_GET['delete_Id'];

    //sql query
    $sql= "delete from crud where id='$delete_Id'"; 
    $run=mysqli_query($con,$sql);

    if($run){
        //echo "Delete  successfully";
        header('location:display.php');//redirect page ..go to display.php page
    }
    else{
        die(mysqli_error($con));
        echo 'Not Deleted';
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<button class='btn btn-danger'>  <a href='display.php'  class='text-light'>Display</a></button>
<button class='btn btn-danger'>  <a href='user.php'  class='text-light'>User</a></button>

</body> 
</html>