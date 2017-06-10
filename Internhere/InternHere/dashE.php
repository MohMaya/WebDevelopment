<?php
  //Employer DashBoard
  session_start();

  $a = $_SESSION['sta'];
  
	if($a!=2)
	{
		header("location:index.php");
		//Just to make sure that no one can access the page unless they are meant to access it
	}
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];

  include 'db.php';

  $query = "SELECT * FROM `empinfo` WHERE `email`='$email'";

  $result = mysqli_query($conn,$query);
  $row = mysqli_fetch_assoc($result);
  $_SESSION['IDNum']=$row['EmpID'];

  
  echo "
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset='utf-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <title>Employer Dashboard</title>
          <link rel='stylesheet' href='css/bootstrap.min.css'>
          <script type='text/javascript' src='js/jquery.min.js'></script>
          <script src='js/bootstrap.min.js'></script>
        </head>
        <body class='container-fluid'>
          <nav class='navbar navbar-inverse'>
            <div class='container-fluid'>
              <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>                        
                </button>
                <a class='navbar-brand' href='#'>InternHere</a>
              </div>
              <div class='collapse navbar-collapse' id='myNavbar'>
                 <ul class='nav navbar-nav '>
                      <li class='active'><a href='index.php'>Home</a></li>
                      <li><a href='createInt.php'>New Internship</a></li>
                      <li><a href='#viewApp'>View Applications</a></li>
                 </ul>
                <ul class='nav navbar-nav navbar-right'>
                  <li><a href='Logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
                </ul>
              </div>
            </div>
          </nav>
          <div class='jumbotron'>
            <h1 style='text-align: center;'>Hello $name </h1><br>
            <h2 style='text-align: center;'>Welcome to InternHere </h2><br>
            <h3 style='text-align: center;'>Best Destination to Search for Interns</h3>
          </div>

          <div class='container-fluid col-md-12' id='viewApp'>
            <h2>Internships By you</h2>
            <p>Select An Internship to view its Applications</p>
            <hr>";
            //Code For Displaying List of Internships given by the Employer
            $employerID = $_SESSION['IDNum'];

            $getAllInternships = "SELECT * FROM `empint` WHERE `EmpID`=$employerID";

            $result = mysqli_query($conn,$getAllInternships);
            if (mysqli_num_rows($result)==0) {
                echo "<h1>No internships Posted By you</h1>";
            }
            else{
              while ($row = mysqli_fetch_assoc($result)) {
                $IntID = $row['IntID'];
                $getInternshipDetails = "SELECT * FROM `intinfo` WHERE `IntID`=$IntID";
                $intResult = mysqli_query($conn,$getInternshipDetails);
                $intdetails = mysqli_fetch_assoc($intResult);
                $title = $intdetails['Title'];
                $description = $intdetails['Descr'];
                $stipend = $intdetails['Stipend'];
                $startDate = $intdetails['StartD']; 
                $endDate = $intdetails['EndD'];

                $currdate =date("Y-m-d");

                if($currdate < $endDate)
                {echo "
                    <div class='col-md-12' style='margin-top: 10px;'>
                      <h3><a href='viewapplication.php?intID=$IntID'>$title</a></h3>
                      <p>$description</p>
                      <h5>Stipend : $stipend</h5>
                      <h5>Status : <b>Open</b></h5>
                      <p class='pull-left'>Apply By: $endDate</p>
                      <p class='pull-right'>Start Date: $startDate</p>
                      <hr>
                    </div>
                ";}
                else
                {
                  echo "
                    <div class='col-md-12' style='margin-top: 10px;'>
                      <h3><a href='viewapplication.php?intID=$IntID'>$title</a></h3>
                      <p>$description</p>
                      <h5>Stipend : $stipend INR/Month</h5>
                      <h5>Status : <b>Closed</b></h5>
                      <p class='pull-left'>Apply By: $endDate</p>
                      <p class='pull-right'>Start Date: $startDate</p>
                      <hr>
                    </div>
                ";
                }

              }
            }

  echo"
          </div>
        </body>
      </html>
  ";

?>