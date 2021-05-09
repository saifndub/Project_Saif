<?php
echo "<button><a href='http://localhost/Project_Saif/Online_Calculator/'><b>Home Page</b></a></button>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<button><a href='http://localhost/Project_Saif/logout.php'><b>Log Out</b></a></button></br></br>";

session_start();
$result = isset($_SESSION['r_s']) ? $_SESSION['r_s'] : "";

	if(isset($_SESSION['print']))
		{echo "</br><font size='5'  color='red'><center>".$_SESSION['print'].$result."</center></font></br>";}
	elseif(isset($_SESSION['note']))
		{echo "</br><font size='5'  color='red'><center>".$_SESSION['note']."</center></font></br>";}
	//echo $_SESSION['note'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ONLINE CALCULATOR</title>
</head>
<body><center>
<form action="process.php" method="post">
<table>
<?php echo "<tr><td>Result :</td>"."<td><input type='' name='number_1' value='$result'/></td></tr>";?>
			<tr><td></td></tr><tr><td></td></tr>
			<tr><td>Number :</td><td><input type="" name="number_2"></td></tr>
			<tr><td colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
<tr><td colspan=2>
<input type="submit" name="add" Value="Add"> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="subtract" Value="Subtract"> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="multiple" Value="Multiple"> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="division" Value="Division"> </td></tr>
</table></center>
</body>
</html>



