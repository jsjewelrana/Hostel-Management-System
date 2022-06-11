<?php

$con=mysqli_connect('localhost','root','','hostel');

if(isset($_POST['btn1'])){

$userid=$_POST['userid'];
$password=$_POST['password'];


$sql= "SELECT * FROM client WHERE userid='$userid' and password='$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

if($count == 1){

   echo "<script type='text/javascript'> alert('Login Successful.....') </script>";
}
else{
     
     echo "<script type='text/javascript'> alert('Login error.....') </script>";
    }
}


mysqli_query($con,$sql);








?>