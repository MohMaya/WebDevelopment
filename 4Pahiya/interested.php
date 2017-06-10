<!DOCTYPE html>
<html lang="en">
<head>
      <title>CarX</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="./css/navbar.css">
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <script src="./js/jquery.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
      <?php include "includes/db.php" ?>
</head>
<body class="container-fluid">
      <nav class="navbar navbar-inverse nav-bar-fixed-top">
            <div class="container-fluid">
                   <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">4PAHIYA</a>
                 </div>
                 <div class="collapse navbar-collapse" id="myNavbar">
                 <ul class="nav navbar-nav ">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="browse.php">Browse</a></li>
                      <li><a href="dealer.php">Dealers</a></li>
                      <li><a href="finance.php">Finance</a></li>
                      <li><a href="news.php">News</a></li>
                      <li>
                              <form name="Search" method="post" action="browsesrc.php" style="margin:12px;">
                                      <input class="text" type="text" name="query" placeholder="Search" required="">
                                      <input type="submit" name="Submit">
                              </form>
                      </li>
                 </ul>



                 <ul class="nav navbar-nav navbar-right" id="myNavbar">
                       <li><a href="adminlog.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                 </ul>
                 </div>
            </div>
      </nav>

      <div class="container">

        <div class="row">
		<div class="jumbotron">
          <form action='interested2.php' method='post'>
                                Pin Code:<input name='pc' placeholder='Your PINcode'>
                                Brand : <select name='bd'>
                                          <option value='Aston M'>Aston Martin</option>
                                          <option value='Audi'>Audi</option>
                                          <option value='Bajaj'>Bajaj</option>
                                          <option value='Bentley'>Bentley</option>
                                          <option value='BMW'>BMW</option>
                                          <option value='Chvrolet'>Chevrolet</option>
                                          <option value='Honda'>Honda</option>
                                          <option value='Hyundai'>Hyundai</option>
                                          <option value='Mahindra'>Mahindra</option>
                                          <option value='Maruti'>Maruti</option>
                                          <option value='Tata'>Tata</option>
                                          <option value='Toyota'>Toyota</option>
                                </select>
                                <input type='submit' value='Search'>
                      </form>
                

            
			</div>

            </div>


            </div>

        </div>

    </div>
</body>
</html>
