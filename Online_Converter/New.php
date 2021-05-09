<?php
echo "<button><a href='logout.php'><b>Log Out</b></a></button></br></br>";
session_start();
if(isset($_SESSION['user_name']))
{
	echo "<strong>Welcome </strong>".$_SESSION['user_name']." !</br></br>" ;
	echo "Welcome To My Project-I .</br></br>" ;
	}
else
{
	header("location:project_i.php");
}
?>