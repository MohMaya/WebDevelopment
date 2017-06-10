<?php
  //General DashBoard
  session_start();
	if(isset($_SESSION['sta']))
	{
		header("location:index.php");
		//Just to make sure that no one can access the page unless they are meant to access it
	}
  include 'db.php';

  echo "
      <!DOCTYPE html>
      <html>
      <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>General Dashboard</title>
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
                             <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
                       </ul>
                       </div>
                  </div>
            </nav>
        <div class='jumbotron'>
          <h1 style='text-align: center;'>Welcome to InternHere</h1><br>
          <h3 style='text-align: center;'>Best Destination for Internships</h3>
        </div>

        <div class='col-md-12'>
          <h2>Internships Available:</h2>
          <h4>A list of Internships for you</h4>
          
          <hr>
        </div>";
        $getAllInternships = "SELECT * FROM `intinfo`";

            $result = mysqli_query($conn,$getAllInternships);
            if (mysqli_num_rows($result)==0) {
                echo "
                <div class='col-md-12'>
                    <h1 style:'text-align: center'>No internships posted right now :(</h1>
                </div>
                    ";
            }
            else{
              while ($row = mysqli_fetch_assoc($result)) {
                $IntID = $row['IntID'];
                $title = $row['Title'];
                $description = $row['Descr'];
                $stipend = $row['Stipend'];
                $startDate = $row['StartD']; 
                $endDate = $row['EndD'];


                $querytogetempid = "SELECT `EmpID` FROM `empint` where `IntID`=$IntID";
                $result0 = mysqli_query($conn,$querytogetempid);
                $r0 = mysqli_fetch_assoc($result0);
                $empID = $r0['EmpID'];

                $querytogetempname = "SELECT `EmpName` FROM `empinfo` where `EmpID`=$empID";
                $result1 = mysqli_query($conn,$querytogetempname);
                $r1 = mysqli_fetch_assoc($result1);
                $empname = $r1['EmpName'];



                $currdate =date("Y-m-d");

                if($currdate < $endDate)
                {
                  echo "
                    <div class='col-md-12' style='margin-top: 10px;'>
                      <h3><a href='login.php'>$title</a></h3>
                      <p>BY : $empname</p>
                      <p>$description</p>
                      <h5>Stipend : $stipend INR/Month</h5>
                      <p class='pull-left'>Apply By: $endDate</p>
                      <p class='pull-right'>Start Date: $startDate</p>
                      <hr>
                    </div>
                  ";
              }
            }
          }
    echo"</body>
      </html>
    ";
?>
