<?php
session_start();
$_SESSION['yy'] = isset($_REQUEST['fn']) ? $_REQUEST['fn'] : "";
$_SESSION['zz'] = isset($_REQUEST['ln']) ? $_REQUEST['ln'] : "";
		//$firstname = $_REQUEST['fn'];
		//$lastname = $_REQUEST['ln'];
			$firstname = $_SESSION['yy'];
			$lastname = $_SESSION['zz'];
	
	//echo "$firstname<br>$lastname" ;
?>
<html>
<head>
<title>Simple Phonebook</title>
</head>
<body><center>
<form method="post" action="Update.php">
<p><font face="verdana" color="green">Old Item</font></p>

<?php echo "First Name :"."<input name='fn' type='text' value='$firstname'/><br/><br/>";
		echo "Last Name :"."<input name='ln' type='text' value='$lastname'/><br/><br/>";?>

<p><font face="verdana" color="green">Update Item</font></p>
Firstname :<input name="uf" type="text"/><br/><br/>
Lastname :<input name="ul" type="text"/><br/><br/>
Number :<input name="unb" type="number"/><br/><br/>
<input type="submit" name="submit" value="Update Contact" ><br/>
</form>
</center>
</body>
</html>