<?php
echo "<button><a href='logout.php'><b>Log Out</b></a></button></br></br>";
session_start();
if(isset($_SESSION['user_name']))
{
	echo "<strong>Hello </strong>".$_SESSION['user_name']." !</></br></br>" ;
	
$tbl_name = "members";

//username and password sent from SESSION_START()
$myusername = $_SESSION['user_name'];
$mypassword = $_SESSION['password'];
//accept data from member_table by $_REQUEST
$person = $_REQUEST['person_name'];

include "connection.php"; 

	//echo $myusername ." ! </br></br>";
	echo "Do you want to know about <strong>$person</strong> ??</br>Here in the below it.....</br></br></br>" ;
	echo "<h4><u>Details About $person</u>  :</h4></br>";
	
$sql = "SELECT * FROM $tbl_name WHERE user_name='$person' ";
//WHERE user_name = '$myusername' and password = '$mypassword'
$result = mysqli_query($con,$sql);

echo "<table>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr><td>User Name :</td><td>".$row['user_name']."</td></tr>";
	//echo "<tr><td>Password :</td><td>".$row['password']."</td></tr>";
	echo "<tr><td>Member Name :</td><td>".$row['member_name']."</td></tr>";
	echo "<tr><td>Age :</td><td>".$row['age']."</td></tr>";
	/*echo "<li>";
	echo $row['user_name'] ;
	echo "</li>";*/
} 
echo "</table>";
}
else{
	header("location:project_i.php");
}
//OR password='$_POST[ln]' 
?>


