<?php

$tbl_name = "members";

//username and password sent from form
$myusername = $_POST['user_name'];
$mypassword = $_POST['user_pass'];
$mypassword = md5($mypassword);//encrypt the password before saving in the database
$mymember = $_POST['member_name'];
$myage = $_POST['age'];

include "connection.php"; 

$sql ="SELECT * FROM $tbl_name WHERE user_name='$myusername'"; //AND LastName='$_POST[ln]'";

$result = mysqli_query($con,$sql);

//Mysql is counting tabel row
$count = mysqli_num_rows($result);
//echo $count;

//if result matched $myusername and $mypassword, table row must be 1 row
if(!$count==1){	
	$sql = "Insert into $tbl_name(user_name,password,member_name,age)
		values('$myusername','$mypassword','$mymember','$myage')";
	mysqli_query($con,$sql);
	session_start();
	$_SESSION['user_name']=$myusername;
	$_SESSION['password']=$mypassword;
	header("location:project_i.php");
	
	//echo "Welcome  $myusername  !";
}else{
	echo "This Username or Password is used...</br>Try with another</br></br>";
	echo "<button type='submit'><a href='signup.php'>Back page</a></button>";
}


?>
