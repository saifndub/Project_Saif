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
}
	echo "<br><br>";
	
		//FirstName , LastName and Number sent from form
		$fn = $_POST['fn'];
		$ln = $_POST['ln'];
		$nb = $_POST['nb'];

	$sql ="Insert into $tbl_name(FirstName,LastName,Number) values('$fn','$ln','$nb')";
	$result = mysqli_query($con,$sql);		//run $qr in mysql_query() function
	
	//chacking $sql variable	
	if($result)
  {
	echo "Done Successfully !";
	 session_start();
	 $_SESSION['add'] = "You Add a parson named $fn $ln";
	header("location:My_contact.php");
  }
  else
  {
	echo "Something worng".mysql_error();
  }
}
else
{
	header("location:http://localhost/project_i00/project_i.php");
}

mysql_close($con);
?>