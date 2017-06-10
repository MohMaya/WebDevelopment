<!DOCTYPE html>
<html lang="en">
<head>
      <title>4Pahiya Home</title>
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
                      <li class="active"><a href="index.php">Home</a></li>
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

      <div class="jumbotron">

                      <?php
                              $n=$_POST['name'];
                              $p=$_POST['phno'];
                              $m=$_POST['message'];
                              $e=$_POST['email'];
                              //echo "$n $p $m $e";
                              $sql="INSERT INTO `Contact` (`Name`, `Phone`, `Message`, `email`) VALUES ('$n','$p','$m','$e')";
                              //echo "$sql";
                              if (mysqli_connect_errno())
                                {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                }

                              if(mysqli_query($conn,$sql))
                              {
                                      echo "<h1>Thank You!!</h1>
                                      <p>We'll Contact you soon</p>";
                              }else {
                                      echo "<h1>OOPS !!!</h1>
                                      <p>There seems to be some problem</p>";
                              }
                        ?>
      </div>
      <hr>
                <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Navigate</p>
                <div class="list-group">
                    <a href="#cars" class="list-group-item">Cars</a>
                    <a href="#news" class="list-group-item">News</a>
                    <a href="#team" class="list-group-item">Team</a>
                    <a href="#contact" class="list-group-item">Contact Us</a>
                </div>
            </div>

            <div class="col-md-9" id="cars">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/ar8.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/mr1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/ra1.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <h4><a href="browse.php"><b>Cars</b></a></h4>
                <?php

                        $sql = "SELECT * FROM `Car`";
                    if (mysqli_connect_errno())
                  {
                          echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }
                    $result = mysqli_query($conn,$sql);
                    $counter=6;
                    while($counter>0)
                    {
                              $rows = mysqli_fetch_assoc($result);
                              $id=$rows['CarId'];
                              $name = $rows['Name'];
                              $price = $rows['Price'];
                              $rate = $rows['Ratings'];
                              $rev = $rows['Review'];
                              $br = $rows['Brand'];
                              $im = $rows['Image'];
                              $counter--;



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

                <button type="submit" formaction="browse.php">More...</button>

            <hr>
                <div class="col-md-12" id="news">
                        <h4><a href="news.php"><b>News</b></a></h4>
                        <?php

                                $sql = "SELECT * FROM `news`";
                            if (mysqli_connect_errno())
                          {
                                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                          }
                            $result = mysqli_query($conn,$sql);
                            $counter=3;
                            while($counter>0)
                            {
                                      $rows = mysqli_fetch_assoc($result);
                                      $id=$rows['news_id'];
                                      $head = $rows['heading'];
                                      $subhead = $rows['Subhead'];
                                      $article = $rows['article'];
                                      $counter--;



                                      echo "    <div class='col-md-9 col-sm-9 col-lg-12' text-overflow: ellipsis; white-space: nowrap; overflow: hidden;>
                                                        <hr>
                                                        <a href='#'><h5>$head</h5></a>
                                                        <p>$subhead</p>

                                                </div>
                                                ";
                            }

                        ?>
                        </div>
                <hr>
                <div class="row">

                <div class='col-md-9' id="team">
                        <h4><a href="team.php"><b>Team</b></a></h4>
                        <hr>
                        <div class='col-sm-4 col-lg-4 col-md-4'>
                                <div class='thumbnail'>
                                        <img src='img/logo2.png' alt='Shivanshu'>
                                        <div class='caption'>
                                            <h4 class='pull-right'>Shivanshu</h4>
                                            <h5 class='pull-right'>Team Leader</h5>

                                        </div>
                                </div>
                        </div>
                        <div class='col-sm-4 col-lg-4 col-md-4'>
                                <div class='thumbnail'>
                                        <img src='img/logo2.png' alt='Sahil'>
                                        <div class='caption'>
                                            <h4 class='pull-right'>Sahil Malik</h4>
                                            <h5 class='pull-right'>PHP Head</h5>

                                        </div>
                                </div>
                        </div>
                        <div class='col-sm-4 col-lg-4 col-md-4'>
                                <div class='thumbnail'>
                                        <img src='img/logo2.png' alt='Shazia'>
                                        <div class='caption'>
                                            <h4 class='pull-right'>Shazia</h4>
                                            <h5 class='pull-right'>Database Manager</h5>

                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        </div>
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
