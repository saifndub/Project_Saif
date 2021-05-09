<?php
echo "<button><a href='logout.php'><b>Log Out</b></a></button></br></br>";
session_start();
if(isset($_SESSION['user_name']))
{
	echo "<strong>Welcome </strong>".$_SESSION['user_name']." !</br></br>" ;
	echo "Welcome To My Project-I .</br></br>" ;

$tbl_name = "members";

//username and password sent from SESSION_START()
$myusername = $_SESSION['user_name'];
$mypassword = $_SESSION['password'];
//echo "$mypassword";

include "connection.php"; 

echo "<ul><b><u>Project  Details</u> :</b></ul>";
echo "-----------------------------------------------------------------------------------------------------</br>
-----------------------------------------------------------------------------------------------------</br>
-----------------------------------------------------------------------------------------------------</br>";

echo "</br><b><u>Use Project-I Apps</u> :</b></br>";
echo "<ul><button><a href='PhoneBook'><b>PhoneBook</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<button><a href='Online_Calculator'><b>Calculator</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<button><a href='Larger_value'><b>Larger value</b></a></button></ul>";

$sql = "SELECT * FROM $tbl_name ";
//WHERE user_name = '$myusername' and password = '$mypassword'
$result = mysqli_query($con,$sql);

echo "</br><b><u>Members</u> :</b>";

echo "<ol>";
while($row = mysqli_fetch_array($result))
{	echo"<form>";
	echo "<li>";
	echo $row['user_name'];		
	$myusername = $row['user_name'];
	echo "<input type='hidden' name='person_name' value=$myusername>&nbsp;&nbsp;
	<button type='submit' formaction='member_details.php'>Details</button></br>" ;
	
	//<input type='submit' formaction='jump.php' method='post' value='Detail'></br>";

	echo "</li>";
	echo"</form>";
}
 echo "</ol>";
}
else
{
	header("location:project_i.php");
}

//echo "<li>Saif</li>";
/*  echo "<tr>";
	echo "<td>".$row['user_name']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "<td>".$row['age']."</td>";
	echo "</tr>";
	echo "<br>";
	*/
?>


