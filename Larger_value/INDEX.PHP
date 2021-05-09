<?php
echo "<button><a href='http://localhost/Project_Saif/home.php'><b>Go back to Project-I</b></a></button>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<button><a href='http://localhost/Project_Saif/logout.php'><b>Log Out</b></a></button></br></br>";
session_start();
$result = isset($_SESSION['print']) ? $_SESSION['print'] : "";

	/*if(isset($_SESSION['print']))
		{$result=$_SESSION['print'];}
	else
		{echo "Somethings went worng";}*/
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Larger One</title>
</head>
<body>
<p><font size="10"  color="red"><center>Enter two integers:</center></font></p></br>
<form action="larger_value.php" method="post"><center><table>
<tr><td>Number 1:</td><td><input type="number" name="number_1"></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td>Number 2:</td><td><input type="number" name="number_2"></td></tr>
				<tr><td colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan=2>
<center><input type="submit" Value="Go"> &nbsp;&nbsp;&nbsp;&nbsp;</center>
</td></tr>
</table></center>
</body>
</html>
<?php 
	echo "</br><font size='5'  color='red'><center>".$result."</center></font></br>";
	unset($_SESSION['print']);
?>







