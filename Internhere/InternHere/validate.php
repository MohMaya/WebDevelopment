<?php
	include 'db.php';

	$id   = $_POST['ID'];
	$pass = $_POST['pass'];
	$email= $id;
	

	$query = "SELECT * FROM `userbase` WHERE `email`='$email'";
	
	
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==0)
	{
		//Emails Do not match
		//Go To Signup Page
		echo "
				<!DOCTYPE html>
				    <html>
				    	<head>
				      		<meta charset='utf-8'>
				      		<meta name='viewport' content='width=device-width, initial-scale=1'>
				      		<meta http-equiv='refresh' content='2;url=signup.php'> 
				       		<title>Student Dashboard</title>
				        	<link rel='stylesheet' href='css/bootstrap.min.css'>
				        	<script type='text/javascript' src='js/jquery.min.js'></script>
				        	<script src='js/bootstrap.min.js'></script>
				      	</head>
				      	<body class='container-fluid'>
				      		<div class='jumbotron'>
				      			<h1 style:'text-align: centre;'>You Are Not registered. Please Sign UP</h1>
				      			<p style:'text-align: centre;'>You are being redirected</p>
				      		</div>
				      	</body>
				    ";
		
	}else
	{
		//Matching E-mail found
		
		$row = mysqli_fetch_assoc($result);
		$actualpass = $row['password'];

		
		if($pass===$actualpass)
		{
			//If passwords match
			$a=$row["username"];
			$b=$row["cat"];
			
			session_start();
			$_SESSION['name'] = $a;
			$_SESSION['email'] = $email;
			$_SESSION['sta']  = $b;
			header("location:index.php");
			
		}
		else
		{
			//passwords don't match
			//Go back to Login Page
			echo "
				<!DOCTYPE html>
				    <html>
				    	<head>
				      		<meta charset='utf-8'>
				      		<meta name='viewport' content='width=device-width, initial-scale=1'>
				      		<meta http-equiv='refresh' content='2;url=login.php'> 
				       		<title>Student Dashboard</title>
				        	<link rel='stylesheet' href='css/bootstrap.min.css'>
				        	<script type='text/javascript' src='js/jquery.min.js'></script>
				        	<script src='js/bootstrap.min.js'></script>
				      	</head>
				      	<body class='container-fluid'>
				      		<div class='jumbotron'>
				      			<h1 style:'text-align: centre;'>Passwords Do Not Match</h1>
				      			<p style:'text-align: centre;'>You are being redirected</p>
				      		</div>
				      	</body>
				    ";
			
		}
	}
	


	
?>