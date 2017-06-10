<?php
	include 'db.php';
	$name   = $_POST['name'];
	$email  = $_POST['mail'];
	$phnum1 = $_POST['PhNo1'];
	$phnum2 = $_POST['PhNo2'];
	$categ  = $_POST['category'];
	$pass1	= $_POST['pass'];
	$pass2	= $_POST['confpass'];

	if ($pass1 != $pass2) {
		
		//Go back if the passwords are not matching Could Have used JavaScript on the previous page itself
		echo "
					<!DOCTYPE html>
				    <html>
				    	<head>
				      		<meta charset='utf-8'>
				      		<meta name='viewport' content='width=device-width, initial-scale=1'>
				      		<meta http-equiv='refresh' content='2;url=SignUP.php'> 
				       		<title>Application Status</title>
				        	<link rel='stylesheet' href='css/bootstrap.min.css'>
				        	<script type='text/javascript' src='js/jquery.min.js'></script>
				        	<script src='js/bootstrap.min.js'></script>
				      	</head>
				      	<body class='container-fluid'>
				      		<div class='jumbotron'>
				      			<h1>Passwords are not matching</h1>;
				      			<p>You Will be redirected now</p>
				      		</div>
				      	</body>
				      </html>
			";
	}
	else
	{
		

		if ($categ == 1) {
			$query = "INSERT INTO `stuinfo` (`StuID`, `Name`, `Email`, `Phno`, `Phno2`) VALUES (NULL, '$name', '$email', '$phnum1', '$phnum2')";
		}else{
			$query = "INSERT INTO `empinfo` (`EmpID`, `EmpName`, `Email`, `Phno`, `Phno2`) VALUES (NULL, '$name', '$email', '$phnum1', '$phnum2')";
		}
		$query2 = "INSERT INTO `userbase` (`email`, `username`, `password`, `cat`) VALUES ('$email', '$name', '$pass1', '$categ')";
		//Could have also used md5() function to insert the passwords in encrypted form but left it as it is, since its a simple submission

		if(!(mysqli_query($conn,$query) && mysqli_query($conn,$query2)))
		{
			echo "
					<!DOCTYPE html>
				    <html>
				    	<head>
				      		<meta charset='utf-8'>
				      		<meta name='viewport' content='width=device-width, initial-scale=1'>
				      		<meta http-equiv='refresh' content='2;url=SignUP.php'> 
				       		<title>SignUP</title>
				        	<link rel='stylesheet' href='css/bootstrap.min.css'>
				        	<script type='text/javascript' src='js/jquery.min.js'></script>
				        	<script src='js/bootstrap.min.js'></script>
				      	</head>
				      	<body class='container-fluid'>
				      		<div class='jumbotron'>
				      			<h1>OOPS!! Error Encountered in Signing you Up</h1>;
				      			<p>You Will be redirected now</p>
				      		</div>
				      	</body>
				      </html>
			";
		}
		else{
			//echo "Regisrtation Succesfull";
			session_start();
			$_SESSION['name'] = $name;
			$_SESSION['sta']  = $categ;
			$_SESSION['email']	  = $email;
			header("location:index.php");
		}
		
	}
?>