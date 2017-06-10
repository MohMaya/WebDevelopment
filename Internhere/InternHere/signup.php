<?php
	session_start();
	if (isset($_SESSION['sta'])) {
			header("location:index.php");
	}
	else{
		echo "
			<!DOCTYPE html>
			<html lang='en'>
			<head>
				<meta charset='utf-8'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
				<title>Signup</title>
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
								Sign UP
							</h1>
						</div>

						<div class='modal-body'>
							<form class='col-lg-12 center-block' action='insert.php' method='POST'>
								<div class='form-group'>
									<input type='text' class='form-control input-lg' placeholder='Username*' name='name' required>		
								</div>
								<div class='form-group'>
									<input type='password' class='form-control input-lg' placeholder='Password*' name='pass' required>
									<input type='password' class='form-control input-lg' placeholder='Re-Enter Password*' name='confpass' style='margin-top: 7px;' required>
								</div>
								<div class='form-group'>
									<input type='text' class='form-control input-lg' placeholder='E-Mail*' name='mail' required>		
								</div>
								<div class='form-group'>
									<input type='text' class='form-control input-lg' placeholder='Phone Number*' name='PhNo1' required>		
								</div>
								<div class='form-group'>
									<input type='text' class='form-control input-lg' placeholder='(Alternate)Phone Number*' name='PhNo2' required>		
								</div>
								<div style='text-align: center;'>
									<h5>Which one are you?</h5>
									<input type='radio' name='category' value='1' checked>Student<br>
			  						<input type='radio' name='category' value='2'>Employer<br>
								</div>
								<div class='form-group' style='margin-top: 4px;'>
									<input type='submit' class='btn btn-block btn-lg btn-primary' name='lgbtn' value='SIGN UP'>
									<h5 class='pull-left'>Already Have An Account?</h5>
									<span class='pull-left'><a href='login.php'><h5>Login</h5></a></span>
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