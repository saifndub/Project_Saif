<?php
$host="localhost";
$username = "root";
$password = "";
$db_name = "project_i";

//Connect to server and select database
$con = mysqli_connect("$host","$username","$password");
mysqli_select_db($con,$db_name);

//to protect MYSQL injection 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con,$myusername);
$mypassword = mysqli_real_escape_string($con,$mypassword);
?>