<?php

$tbl_name = "members";

//username and password sent from form
$myusername = $_POST['user_name'];
$mypassword = $_POST['user_pass'];
$mypassword = md5($mypassword);//encrypt the password before saving in the database

include "connection.php"; 

$sql = "SELECT * FROM $tbl_name WHERE user_name = '$myusername' and password = '$mypassword'";
$result = mysqli_query($con,$sql);
//Mysql is counting tabel row
$count = mysqli_num_rows($result);

//if result matched $myusername and $mypassword, table row must be 1 row

if($count==1){	
	session_start();
	$_SESSION['user_name']=$myusername;
	$_SESSION['password']=$mypassword;
	header("location:home.php");
	//echo $_SESSION['password'];
	//echo "Welcome  $myusername  !";
}else{
	echo "Doesn't exist </br>Wrong Username or Password";
	header("location:signup.php");
}

?>
