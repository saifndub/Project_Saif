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
	
	//accept all values from form
	$fname = $_POST['fn'];
	$lname = $_POST['ln'];	
	$upfname = $_POST['uf'];
	$uplname = $_POST['ul'];
	$upnum = $_POST['unb'];

if(!$upfname)
{
	$upfname = $_POST['fn'];
}else
{
	$upfname = $_POST['uf'];
}
if(!$uplname)
{
	$uplname = $_POST['ln'];
}else
{
	$uplname = $_POST['ul'];
}
if(!$upnum)
{
	$sql ="SELECT Number FROM $tbl_name WHERE FirstName='$fname' OR LastName='$lname'";
	$result = mysqli_query($con,$sql);		//run $qr in mysql_query() function

	while($row = mysqli_fetch_array($result))
	{
		$upnum = $row['Number']; 
	}
}else
{
	$upnum = $_POST['unb'];
}
/*echo $upfname;
echo $uplname;
echo $upnum;*/
	
	$qr ="UPDATE $tbl_name SET FirstName='$upfname' , LastName='$uplname' , Number='$upnum'
			WHERE FirstName='$fname' AND LastName='$lname'";
	$sql = mysqli_query($con,$qr);		//run $qr in mysql_query() function
	
	if($sql)
{
	echo "Done Successfully !";
	header("location:My_contact.php");
}
else
{
	echo "Something worng".mysqli_error();
}
}
else{
	header("location:http://localhost/Project_Saif/project_i.php");
}

mysqli_close($cn);
/*while($row = mysql_fetch_array($sql))
{
	
	echo $row['FirstName']."</br>";
	echo $row['LastName']."</br>";
	echo $row['Number']."</br>";
	
	echo "<br>";
}*/

?>