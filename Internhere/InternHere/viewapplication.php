<?php
  //Employer DashBoard
  session_start();

  $a = $_SESSION['sta'];
  
  if($a!=2)
  {
 	header("location:index.php");
	//Just to make sure that no one can access the page unless they are meant to access it
  }

  include 'db.php';

  $name = $_SESSION['name'];
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
                      <li><a href='index.php'>View Applications</a></li>
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
          </div>";
       

  $internshipID = $_GET['intID'];

  $studIDapplied = "SELECT * FROM `stuint` WHERE `IntID`=$internshipID";
  $internshipTitle = "SELECT `Title` FROM `intinfo` WHERE `IntID`=$internshipID";

  $r0 = mysqli_query($conn,$internshipTitle);
  $titleli = mysqli_fetch_assoc($r0);
  $title = $titleli['Title'];

  echo "<div class='container-fluid col-md-12' id='viewApp'>
            <h2>Applications for $title</h2>
            <hr>";

  $result = mysqli_query($conn,$studIDapplied);
  if(mysqli_num_rows($result)==0){
  	echo "No Applications Yet :(";
  }
  else{
  	 echo "<table class='table table-hover table-bordered'>
                             <thead>
                               <tr>

                                 <th>Name</th>
                                 <th>Phone Number</th>
                                 <th>Alt. Phone Number</th>
                                 <th>E-Mail ID</th>
                               </tr>
                             </thead>
                             <tbody>";


  	while ($row=mysqli_fetch_assoc($result)) {
  		$studentid = $row['StuID'];
  		$getStudDetails = "SELECT * FROM `stuinfo` WHERE `StuID`=$studentid";

  		$result2 = mysqli_query($conn,$getStudDetails);

  		$row1 = mysqli_fetch_assoc($result2);

  		$StuName = $row1['Name'];
  		$StuEmail = $row1['Email'];
  		$PhNum1 = $row1['Phno'];
  		$PhNum2 = $row1['Phno2'];

  		 echo "
                                           <tr>

                                           <td>$StuName</td>
                                           <td>$PhNum1</td>
                                           <td>$PhNum2</td>
                                           <td>$StuEmail</td>
                                           </tr>
                                            ";
   	}
   	echo"</tbody>
       </table>
       </div>";
  
  }

  echo "   </body>
        </html>
       ";

?>