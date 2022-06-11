<?php

$con=mysqli_connect('localhost','root','','jewel');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$place=$_POST['place'];
$nationality=$_POST['nationality'];
$nid=$_POST['nid'];
$birth=$_POST['birth'];
$DepartmentReligion=$_POST['DepartmentReligion'];
$Departmentlevel=$_POST['Departmentlevel'];
$gender=$_POST['gender'];
$fname=$_POST['fname'];
$fphone=$_POST['fphone'];
$Mname=$_POST['Mname'];
$presentAddress=$_POST['presentAddress'];
$PerAddress=$_POST['PerAddress'];


$sql= "insert into onlineadmission(name,email,phone,date,place,nationality,nid,birth,DepartmentReligion,Departmentlevel,gender,fname,fphone,Mname,presentAddress,PerAddress) values ('$name','$email',$phone,'$date','$place','$nationality',$nid,$birth,'$DepartmentReligion','$Departmentlevel','$gender','$fname',$fphone,'$Mname','$presentAddress','$PerAddress')";

mysqli_query($con,$sql);

echo "Online Apply Successful.....";



?>