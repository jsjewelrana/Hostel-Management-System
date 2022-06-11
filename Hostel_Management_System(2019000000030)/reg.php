<?php

$con=mysqli_connect('localhost','root','','hostel');

$name=$_POST['name'];
$userid=$_POST['userid'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$password=$_POST['password'];
$confirmpass=$_POST['confirmpass'];

$sql= "insert into client(name,userid,email,phoneno,password,confirmpass) values ('$name',$userid,'$email',$phoneno,$password,$confirmpass)";

mysqli_query($con,$sql);

echo "Registration Successful.....";



?>