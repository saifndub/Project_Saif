<?php
echo "<button><a href='http://localhost/Project_Saif/logout.php'><b>Log Out</b></a></button></br></br>";
echo "<button><a href='http://localhost/Project_Saif/PhoneBook/'><b>Home Page</b></a></button></br></br>";
session_start();
if(isset($_SESSION['user_name']))
{
	action();		//calling the function
}
else{
	header("location:http://localhost/Project_Saif/project_i.php");
}


//creating a function and defined by action
	function action()
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

//FirstName and LastName sent from form
 $_SESSION['fn'] = $_POST['fn'];
 $_SESSION['ln'] = $_POST['ln'];
	$fn = $_SESSION['fn'];
	$ln = $_SESSION['ln'];

	$qr ="SELECT * FROM $tbl_name WHERE FirstName='$fn' AND LastName='$ln'";
	$sql = mysqli_query($con,$qr);		//run $qr in mysql_query() function
	$count = mysqli_num_rows($sql);		//Mysql is counting tabel row
	
		if ($count !== 0){
	echo "<center><table border='1'>";
	echo "<tr><th>NO.</th>
	<th>Fast Name</th>
	<th>Last Name</th>
	<th>Number</th>
	<th>Update Info</th>
	<th>Delete Info</th>
	</tr>";
	$counter = 0;
	
	while($row = mysqli_fetch_array($sql))
	{	
	$counter++;
	echo"<form method='post'>";
	echo "<tr><td><center>$counter.</center></td>";
	echo "<td>".$row['FirstName']."</td>";
	echo "<td>".$row['LastName']."</td>";
	echo "<td>".$row['Number']."</td>";
	$firstname = $row['FirstName']; 
	$lastname = $row['LastName'];
	echo "<input type='hidden' name='fn' value=$firstname>
		  <input type='hidden' name='ln' value=$lastname>";
	echo "<td><center><button type='submit' formaction='UPDATE_FORM.PHP'>Update</button></center></td>
			<td><center><button type='submit' formaction='Delete.php'>Delete</button><center></td>" ;
	echo "</tr>";
	//echo "</br>";
	echo"<form>";
	}
	echo "</table></center>";
}
else {
		echo "<center><font size='5'  color='red'>Can't find any contact similar with this</font></br></br><button>
		<a href='http://localhost/Project_Saif/PhoneBook/SEARCH_FORM.HTML'><b>Back</b></a></button></center>";
	}	
mysqli_close($con);
}


/*
	if($row['FirstName'])
	{session_start();
		$_SESSION['F']=$row['FirstName'];$_val1 = $_SESSION['F']; echo "$_val1";   //echo $_SESSION['F'];
	}
	else{
		echo "No Value";
	}
*/

?>