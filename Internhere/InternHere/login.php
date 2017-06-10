<?php
	session_start();
	if (isset($_SESSION['sta'])) {
		header("location:index.php");
	}
	else
	{	echo "
				<!DOCTYPE html>
				<html lang='en'>
				<head>
					<meta charset='utf-8'>
					<meta name='viewport' content='width=device-width, initial-scale=1'>
					<title>Login</title>
					<link rel='stylesheet' href='css/bootstrap.min.css'>
				  	<script src='js/bootstrap.min.js'></script>
				</head>
				<body>
					<div class='jumbotron'>
						<h1 style='text-align: center;'>Welcome to InternHere</h1><br>
						<h3 style='text-align: center;'>Best Destination for Internships</h3>
					</div>
					<div class='modal-dialog'>
						<div class='modal-content col-lg-12'>
							<div class='modal-header'>
								<h1 class='text-center'>
									LOGIN
								</h1>
							</div>

							<div class='modal-body'>
								<form class='col-lg-12 center-block' action='validate.php' method='POST'>
									<div class='form-group'>
										<input type='text' class='form-control input-lg' placeholder='Email ID' name='ID' required>		
									</div>
									<div class='form-group'>
										<input type='password' class='form-control input-lg' placeholder='Password' name='pass' required>
									</div>
									<div class='form-group'>
										<input type='submit' class='btn btn-block btn-lg btn-primary' name='lgbtn' value='Log In'>
										<span class='pull-left'><a href='signup.php'><h5>SignUP</h5></a></span>
										<span class='pull-right'><a href='index.php'><h5>Just Browse</h5></a></span>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</body>
				</html>
		";
	}
?>
