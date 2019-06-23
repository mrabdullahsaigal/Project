<?php
include "database.php";
include "signup.php";
$fname=$_GET['firstname'];
$lname=$_GET['lastname'];
$email=$_GET['email'];
$password=$_GET('pw');
$dob=$_GET('DOB');
$gender=$_GET('gender');

$query="insert into  user values('$fname','$lname','$email','$password','$dob','$gender')";
mysqli_query($conn,$query);