 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<br><br><br><br>
    <center><h1>View Customer info  !!!!</h1></center>
    <hr><hr>
     
<div class="container">
<button class="btn btn-primary my-5  "> <a href="adminpage.html" class="text-light">Back to Admin Panel</a></button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn btn-primary my-5  "> <a href="user.php" class="text-light">Add user</a></button>
</div>


<table class="table " >
  <thead class="thead-dark">
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

<?php
///connection php page import for db connection
include  "connection.php";
 
$sql="Select * from crud";

///query execute
$result=mysqli_query($con,$sql);

//if query execute
if($result){
     
  ///fetch row from the table
    while($row=mysqli_fetch_assoc($result)){
      //assign row value
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];

        //new table row create
        //assign variable in td
        ///last 2 button for create update and delete
        //syntax::: <a href='delete.php?delete_Id=".$row['id']."'
        //here need to ? after php....then declare variable and give key for catch which row i want to update or delete next time
        echo "
        <tr>
        
        <td>$id</td>
        <td>$name</td>
        <td>$email</td>
        <td>$mobile</td>
        <td>$password</td>
        <td>          
        <button class='btn btn-primary'> <a href='update.php?update_Id=".$row['id']."' class='text-light'>Update</a></button>
        <button class='btn btn-danger'>   <a href='delete.php?delete_Id=".$row['id']."' class='text-light'>Delete</a>  </button>
         
 
    
        </td>
    
      </tr>
        
        ";
    }
   
}
else{
  die(mysqli_error($con));
  //echo 'Not submitted';
}


?>
 
 
 
 

  </tbody>
</table>
 
 

</body>
</html>