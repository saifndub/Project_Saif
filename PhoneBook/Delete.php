<?php
echo "<button><a href='http://localhost/Project_Saif/logout.php'><b>Log Out</b></a></button></br></br>";
session_start();
if(isset($_SESSION['user_name']))
{

$tbl_name = "book";

//username and password sent from SESSION_START()
$myusername = $_SESSION['user_name'];
$mypassword = $_SESSION['password'];

include "connection.php"; 

if(!$con)
{
	die("could not connect to the server successfully".mysqli_error());
}
else
{
	echo "<font size='5' face='verdana' color='blue'><center>
	We are always try to help you in this Project . . . . .</center></font>";
}echo "<br><br>";
	
//FirstName and LastName sent from form
 $fname = $_REQUEST['fn'];
 $lname = $_REQUEST['ln']; //echo $lname.$fname;

	$sql ="SELECT * FROM $tbl_name WHERE FirstName='$fname' OR LastName='$lname'";
	$result = mysqli_query($con,$sql);
	
	if($row = mysqli_fetch_array($result))
{	
	$qr ="DELETE FROM $tbl_name WHERE FirstName='$fname' AND LastName='$lname'";
	$sql = mysqli_query($con,$qr);		//run $qr in mysql_query() function

	echo "Done Successfully !";
	 session_start();
	 $_SESSION['del'] = "You Delete a parson named $fname $lname";
	header("location:My_contact.php");
}
else
{
	echo "Can't find any contact</br>";
	echo "Something went worng".mysqli_error();
}
	
}
else{
	header("location:http://localhost/project_i00/project_i.php");
}

mysqli_close($cn);
?>