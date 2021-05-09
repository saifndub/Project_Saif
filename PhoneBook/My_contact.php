<?php
echo "<button><a href='http://localhost/Project_Saif/PhoneBook/'><b>Home Page</b></a></button>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
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

	//$result = isset($_SESSION['del']) ? $_SESSION['del'] : "";	//(not need)
	if(isset($_SESSION['add']))
		{echo "<font size='5'  color='red'><center>".$_SESSION['add']."</center></font></br>";}
	elseif(isset($_SESSION['del']))
		{echo "</br><font size='5'  color='red'><center>".$_SESSION['del']."</center></font></br>";}
	
	$sql ="SELECT * FROM $tbl_name";
	//echo "<br>";echo "<br>";
	
	$result = mysqli_query($con,$sql);
	
	echo "<center><table border='1'>";
	echo "<tr><th>NO.</th>
	<th>Fast Name</th>
	<th>Last Name</th>
	<th>Number</th>
	<th>Update Info</th>
	<th>Delete Info</th>
	</tr>";
	
	$counter = 0;
	while($row = mysqli_fetch_array($result))
{	$counter++;
	echo"<form>";
	echo "<tr><td><center>$counter.</center></td>";
	echo "<td>$row[FirstName]</td>";
	echo "<td>$row[LastName]</td>";
	echo "<td>$row[Number]</td>";
	$fname = $row['FirstName'];
	$lname = $row['LastName'];
		echo "<input type='hidden' name='fn' value=$fname>
				<input type='hidden' name='ln' value=$lname>";
		echo "<td><center><input type='submit' formaction='UPDATE_FORM.PHP' method='post' value='Update'></center></td>
				<td><center><input type='submit' formaction='Delete.php' method='post' value='Delete'></center></td>";
				
	echo "</tr>";
	echo"</form>";
}
	echo "</table></center>";
}
else{
	header("location:http://localhost/project_i00/project_i.php");
}
mysqli_close($con);

unset($_SESSION['add']);
unset($_SESSION['del']);

/*	echo "<tr>";
	echo "<td>".$row['FirstName']."</td>";
	echo "<td>".$row['LastName']."</td>";
	echo "<td>".$row['Number']."</td>";
	echo "</tr>";
*/
?>