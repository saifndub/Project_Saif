<?php
//find the larger one...
 $val1 = $_POST["number_1"];
 $val2 = $_POST["number_2"];


		if($val1>$val2)
			$larger=$val1;
		else
			$larger=$val2;
		echo $larger;
	 	session_start();
		$_SESSION['print'] = "larger of inputs is : ".$larger;
		header("location:INDEX.PHP");
?>