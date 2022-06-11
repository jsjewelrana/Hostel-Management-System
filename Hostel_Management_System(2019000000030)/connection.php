<?php
 
 $server= "localhost";
 $username="root";
 $password=""; //empty pass
 $dbname="php";
  
 //database connection
 $con = mysqli_connect($server,$username,$password,$dbname);
 

 if(!$con){
    die(mysqli_error($con));
 }
 
?>
