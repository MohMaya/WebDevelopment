<?php
	session_start();

  	$a = $_SESSION['sta'];
  
	if($a!=1)
	{
		header("location:index.php");
		//Just to make sure that no one can access the page unless they are meant to access it
	}
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $StuID = $_SESSION['IDNum'];
  $IntID = $_GET['IntID'];
  $_SESSION['InternshipID'] = $IntID;
  include 'db.php';

  echo "
  	  <!DOCTYPE html>
      <html>
      <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Student Dashboard</title>
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <script type='text/javascript' src='js/jquery.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
      </head>
      <body class='container-fluid'>
        <nav class='navbar navbar-inverse nav-bar-fixed-top'>
                  <div class='container-fluid'>
                         <div class='navbar-header'>
                              <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                                      <span class='icon-bar'></span>
                                      <span class='icon-bar'></span>
                                      <span class='icon-bar'></span>
                              </button>
                              <a class='navbar-brand' href='index.php'>InternHere</a>
                       </div>
                       <div class='collapse navbar-collapse' id='myNavbar'>
                       <ul class='nav navbar-nav '>
                            <li class='active'><a href='index.php'>Home</a></li>
                       </ul>



                       <ul class='nav navbar-nav navbar-right' id='myNavbar'>
                             <li><a href='Logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
                       </ul>
                       </div>
                  </div>
            </nav>";

      $query = "SELECT `Title`,`Descr` FROM `intinfo` WHERE `IntID`=$IntID";
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($result);
      $title = $row['Title'];
      $description = $row['Descr']; 

      echo"      
        <div class='jumbotron' style='text-align: center;'>
          <h1>$title</h1><br>
          <p>$description</p><br>
          <div class='col-md-4'></div>
          <div class='col-md-4 text-center'>
            <a class = 'btn btn-primary center-block btn-lg' href = 'formfill.php' role = 'button' style='align-self: center;'>Apply</a>
          </div>
        </div>

      </body>
      </html>
	";

  
?>