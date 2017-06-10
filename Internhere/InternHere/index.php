<?php
	session_start();
	$category = $_SESSION['sta'];
	if ($category==1) {
		//A student has logged In 
		//Redirect him to Student Dashboard
		header("location:dashS.php");
	}else if($category == 2){
		//An Employer has logged in
		//Redirect him to Employer DashBoard
		header("location:dashE.php");
	}else
	{
		//Neither a student Nor a Employer has Logged in
		//redirect to general dashboard
		header("location:dashG.php");
	}
	
?>