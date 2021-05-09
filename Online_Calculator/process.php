<?php
session_start();
if(isset($_SESSION['user_name']))
{	process(); }
else{	header("location:http://localhost/Project_Saif/project_i.php");	}

function process()
{
	session_start();
	unset($_SESSION['r_s']);
	unset($_SESSION['print']);
//session_destroy();
 $num1 = $_POST["number_1"];
 $num2 = $_POST["number_2"];
 
 //add($num1,$num2);
 function add($n1,$n2){
	 $sum = $n1 + $n2;
	 echo "The sum of two number is : $sum"."<br>"."<br>";
	 	 session_start();
	 $_SESSION['r_s'] = $sum;
	 $_SESSION['print'] = "The sumation is : ";
	 header("location:RESULT.PHP");
 }

//subt($num1,$num2);
function subt($n1,$n2){
	 $subt = $n1 - $n2;
	 echo "The subtract of two number is : $subt"."<br>"."<br>";
	  	 session_start();
	 $_SESSION['r_s'] = $subt;
	 $_SESSION['print'] = "The subtraction is : ";
	 header("location:RESULT.PHP");
 }

//mult($num1,$num2);
function mult($n1,$n2){
	 $mult = $n1 * $n2;
	 echo "The multiple of two number is : $mult"."<br>"."<br>";
		session_start();
	 $_SESSION['r_s'] = $mult;
	 $_SESSION['print'] = "The multiplication is : ";
	 header("location:RESULT.PHP");
 }

//divi($num1,$num2);
function divi($n1,$n2){
	if($n2==0){
		echo "This division cannot be performed.";
		session_start();
		$_SESSION['r_s'] = $n1;
		$_SESSION['note'] = "This division cannot be performed .";
		header("location:RESULT.PHP");
	 }
	else{
		 $div = $n1 / $n2;
	echo "The division of two number is : $div"."<br>"."<br>";
	 	 session_start();
	 $_SESSION['r_s'] = $div;
	 $_SESSION['print'] = "The division is : ";
	 header("location:RESULT.PHP");
 }
}

if(isset($_POST["add"]))
{
add($num1,$num2);
}
	Elseif(isset($_POST["subtract"]))
	{
	subt($num1,$num2);	
	}
		elseif(isset($_POST["multiple"]))
		{
		mult($num1,$num2);
		}
			elseif(isset($_POST["division"]))
			{
			divi($num1,$num2);
			}
}
?>