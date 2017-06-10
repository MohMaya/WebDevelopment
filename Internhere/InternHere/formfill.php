<?php
	//Page where application to apply to an internship and to create an internship are handled
	include 'db.php';
	session_start();
	$wait =3;
	$category = $_SESSION['sta'];
	if($category==1){
		//Student aplication has been recieved
		//Insert into table StuInt
		//If successful, display tha message
		//Else return
		$StuID = $_SESSION['IDNum'];
		$IntID = $_SESSION['InternshipID'];

		$insertionQuery = "INSERT INTO `stuint` (`StuID`, `IntID`) VALUES ($StuID, $IntID)";

		if(!mysqli_query($conn,$insertionQuery)){
			//If Already present, Insertion Doesn't happen
			echo "
					<!DOCTYPE html>
				    <html>
				    	<head>
				      		<meta charset='utf-8'>
				      		<meta name='viewport' content='width=device-width, initial-scale=1'>
				      		<meta http-equiv='refresh' content='2;url=index.php'> 
				       		<title>Application Status</title>
				        	<link rel='stylesheet' href='css/bootstrap.min.css'>
				        	<script type='text/javascript' src='js/jquery.min.js'></script>
				        	<script src='js/bootstrap.min.js'></script>
				      	</head>
				      	<body class='container-fluid'>
				      		<div class='jumbotron'>
				      			<h1>It seems you are already enrolled</h1>;
				      			<p>You Will be redirected now</p>
				      		</div>
				      	</body>
				      </html>
			";
		}
		else{
			//Insertion Succesful
			echo "
					<!DOCTYPE html>
				    <html>
				    	<head>
				      		<meta charset='utf-8'>
				      		<meta name='viewport' content='width=device-width, initial-scale=1'>
				      		<meta http-equiv='refresh' content='2;url=index.php'> 
				       		<title>Application Status</title>
				        	<link rel='stylesheet' href='css/bootstrap.min.css'>
				        	<script type='text/javascript' src='js/jquery.min.js'></script>
				        	<script src='js/bootstrap.min.js'></script>
				      	</head>
				      	<body class='container-fluid'>
				      		<div class='jumbotron'>
				      			<h1>Congratulations, you are successfully enrolled</h1>;
				      			
				      		</div>
				      	</body>
				      </html>
			";
		}
	}
	elseif ($category == 2) {
		//Employer Application has been recieved to create a new internship
		$empId = $_SESSION['IDNum'];
		$intTitle = $_POST['title'];
		$intDecsr = $_POST['description'];
		$Stipend = $_POST['stipend'];
		$StartD = $_POST['startdate'];
		$EndD = $_POST['applyby'];

		$insertionQuery = "INSERT INTO `intinfo` (`IntID`, `Title`, `Descr`, `Stipend`, `StartD`, `EndD`) VALUES (NULL, '$intTitle', '$intDecsr', '$Stipend', '$StartD', '$EndD')";

		if(!mysqli_query($conn,$insertionQuery)){
			//Error in creating the internship, Cannot insert
			echo "
					<!DOCTYPE html>
				    <html>
				    	<head>
				      		<meta charset='utf-8'>
				      		<meta name='viewport' content='width=device-width, initial-scale=1'>
				      		<meta http-equiv='refresh' content='2;url=CreateInt.php'> 
				       		<title>Internship Status</title>
				        	<link rel='stylesheet' href='css/bootstrap.min.css'>
				        	<script type='text/javascript' src='js/jquery.min.js'></script>
				        	<script src='js/bootstrap.min.js'></script>
				      	</head>
				      	<body class='container-fluid'>
				      		<div class='jumbotron'>
				      			<h1>OOPS!!</h1>;
				      			<p>Error in creating the internship. Retry</p>
				      		</div>
				      	</body>
				      </html>
			";
		}
		else{
			//Insertion Succesful
			$selectionquery = "SELECT `IntID` from `intinfo` where `Title`='$intTitle' AND `Descr`='$intDecsr' AND `Stipend`=$Stipend";
			$result0 = mysqli_query($conn,$selectionquery);
			$row0 = mysqli_fetch_assoc($result0);
			$intID = $row0['IntID'];
			//echo "$IntID";

			$insertionQuery2 = "INSERT INTO `empint` (`EmpID`, `IntID`) VALUES ($empId, $intID)";
			if(!mysqli_query($conn,$insertionQuery2)){
				echo "
						<!DOCTYPE html>
					    <html>
					    	<head>
					      		<meta charset='utf-8'>
					      		<meta name='viewport' content='width=device-width, initial-scale=1'>
					      		<meta http-equiv='refresh' content='2;url=CreateInt.php'> 
					       		<title>Internship Status</title>
					        	<link rel='stylesheet' href='css/bootstrap.min.css'>
					        	<script type='text/javascript' src='js/jquery.min.js'></script>
					        	<script src='js/bootstrap.min.js'></script>
					      	</head>
					      	<body class='container-fluid'>
					      		<div class='jumbotron'>
					      			<h1>OOPS2!!</h1>;
					      			<p>Error in creating the internship Retry</p>
					      		</div>
					      	</body>
					      </html>
				";

			}else
			{
				echo "
						<!DOCTYPE html>
					    <html>
					    	<head>
					      		<meta charset='utf-8'>
					      		<meta name='viewport' content='width=device-width, initial-scale=1'>
					      		<meta http-equiv='refresh' content='2;url=index.php'> 
					       		<title>Internship Status</title>
					        	<link rel='stylesheet' href='css/bootstrap.min.css'>
					        	<script type='text/javascript' src='js/jquery.min.js'></script>
					        	<script src='js/bootstrap.min.js'></script>
					      	</head>
					      	<body class='container-fluid'>
					      		<div class='jumbotron'>
					      			<h1>Congratulations, your internship has been successfully created</h1>;
					      		</div>
					      	</body>
					      </html>
				";

			}
		}


	}
?>