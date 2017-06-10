<!DOCTYPE html>
<html lang="en">
<head>
      <title>Browse</title>
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
                      <li class="active"><a href="browse.php">Browse</a></li>
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
      <div class="conatiner">
              <div class="row">
                      <div class="col-md-3">
                              <div class="panel-group" id="accordion">
                                      <div class="panel panel-default">
                                                <div class="panel-heading">
                                                          <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Browse By Company</a>
                                                          </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse in">
                                                        <ul class="list-group">
                                                               <a href='browsefil.php?cat_id=1&br=Aston M'><li class="list-group-item">Aston Martin</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Audi'><li class="list-group-item">Audi</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Bajaj'><li class="list-group-item">Bajaj</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Bentley'><li class="list-group-item">Bentley</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=BMW'><li class="list-group-item">BMW</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Chvrolet'><li class="list-group-item">Chevrolet</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Honda'><li class="list-group-item">Honda</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Hyundai'><li class="list-group-item">Hyundai</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Mahindra'><li class="list-group-item">Mahindra</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Maruti'><li class="list-group-item">Maruti</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Tata'><li class="list-group-item">Tata</li></a>
                                                               <a href='browsefil.php?cat_id=1&br=Toyota'><li class="list-group-item">Toyota</li></a>
                                                        </ul>
                                                </div>
                                      </div>
                                      <div class="panel panel-default">
                                                <div class="panel-heading">
                                                          <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Browse By Category</a>
                                                          </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse">
                                                        <ul class="list-group">
                                                                <a href='browsefil.php?cat_id=2&br=Hatch'><li class="list-group-item">HatchBack</li></a>
                                                                <a href='browsefil.php?cat_id=2&br=MUV'><li class="list-group-item">MUV</li></a>
                                                                <a href='browsefil.php?cat_id=2&br=Sport'><li class="list-group-item">SportsCar</li></a>
                                                                <a href='browsefil.php?cat_id=2&br=Sedan'><li class="list-group-item">Sedan</li></a>
                                                                <a href='browsefil.php?cat_id=2&br=SUV'><li class="list-group-item">SUV</li></a>
                                                        </ul>
                                                </div>
                                      </div>

                                </div>
                      </div>
                      <div class="col-md-9">
                              <?php

                                      $ci = $_GET["cat_id"];
                                      if ($ci == 1) {
                                              $br = $_GET["br"];
                                              $sql = "SELECT * FROM `Car` WHERE `Brand`='$br'";
                                      }
                                      else {
                                              $br = $_GET["br"];
                                              $sql = "SELECT * FROM `Car` WHERE `Type`='$br'";
                                      }
                                  if (mysqli_connect_errno())
                                {
                                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                }
                                  $result = mysqli_query($conn,$sql);
                                  //$counter=6;
                                  while($rows = mysqli_fetch_assoc($result))
                                  {

                                            $id=$rows['CarId'];
                                            $name = $rows['Name'];
                                            $price = $rows['Price'];
                                            $rate = $rows['Ratings'];
                                            $rev = $rows['Review'];
                                            $br = $rows['Brand'];
                                            $im = $rows['Image'];
                                            //$counter--;



                                            echo "    <div class='col-sm-4 col-lg-4 col-md-4'>
                                                                <div class='thumbnail'>
                                                                      <a href='car-abc.php?item_id=$id'>
                                                                      <img src=$im alt=''>
                                                                      <div class='caption'>
                                                                      <h4 class='pull-right'>INR $price L</h4>
                                                                      <h4>$br $name</h4>
                                                                      </a>
                                                                        </div>
                                                                </div>
                                                          </div>
                                                      ";
                                  }

                              ?>
                      </div>
                </div>
      </div>
</body>
<footer>
    <div class="row" id="contact">
    <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="jumbotron">
                            <h1>Contact Us</h1>
                            <p>Leave your details and we'll Contact you.</p>
                            <form action="ty.php" method="post">
                                 <p>Name:      </p><input type="text" name="name"><br><br>
                                 <p>E-mail:    </p><input type="text" name="email"><br><br>
                                 <p>Message:   </p><input type="text" name="message"><br><br>
                                 <p>Phone no.: </p><input type="text" name="phno"><br><br>
                                 <input type="submit">
                                 </form>
            </div>
    </div>

  </div>

</footer>
</html>
