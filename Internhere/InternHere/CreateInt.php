<?php
  //Employer DashBoard
  //Form to create an internship
  // accesible by only the employer 
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
                    <li><a href='index.php'>Home</a></li>
                    <li class='active'><a href='#'>New Internship</a></li>
                    <li><a href='index.php'>View Applications</a></li>
               </ul>
              <ul class='nav navbar-nav navbar-right'>
                <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class='jumbotron'>
          <h1 style='text-align: center;'>Hello $name </h1><br>
          <h2 style='text-align: center;'>Welcome to InternHere </h2><br>
          <h3 style='text-align: center;'>Create a new Internship by filling the form below</h3>
        </div>

        <div class='modal-dialog'>
                <div class='modal-content col-lg-12'>
                  <div class='modal-header'>
                    <h1 class='text-center'>
                      New Internship
                    </h1>
                  </div>

                  <div class='modal-body'>
                    <form class='col-lg-12 center-block' action='formfill.php' method='POST'>
                      <div class='form-group'>
                        <input type='text' class='form-control input-lg' placeholder='Title*' name='title' required>    
                      </div>
                      
                      <div class='form-group'>
                        <textarea class='form-control input-lg' rows='4' cols='70' name='description' placeholder='Enter the Description here*' required></textarea>    
                      </div>
                      <div class='form-group'>
                        <input type='text' class='form-control input-lg' placeholder='Stipend (in INR/Month)*' name='stipend' required>   
                      </div>
                      
                      <div class='form-group'>
                        Start Date : 
                        <input type='text' class='form-control input-lg' placeholder='yyyy-mm-dd' name='startdate' required>   
                      </div>

                      <div class='form-group'>
                        Apply By : 
                        <input type='text' class='form-control input-lg' placeholder='yyyy-mm-dd' name='applyby' required>   
                      </div>


                      <div class='form-group' style='margin-top: 4px;'>
                        <input type='submit' class='btn btn-block btn-lg btn-primary' name='lgbtn' value='Create Internship'>
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
      </body>
      </html>
  ";