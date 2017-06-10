<!DOCTYPE html>
<html lang="en">
<head>
      <title>News</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="./css/navbar.css">
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <script src="./js/jquery.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
      <?php include 'includes/db.php'; ?>
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
                      <li class="active"><a href="news.php">News</a></li>
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

        <div class="col-lg-12">
                <div class="jumbotron">
                        <h1>News</h1>
                        <p>Wanna Know the latest news in auto industry?<br>We got you ;)</p>
                </div>
                <hr>
                    <div class="col-md-12" id="news">
                            <h4><a href="news.php"><b>News</b></a></h4>
                            <?php
                                    $id=$_GET['id'];
                                    $sql = "SELECT * FROM `news` WHERE `news_id`='$id'";
                                if (mysqli_connect_errno())
                              {
                                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                              }
                                $result = mysqli_query($conn,$sql);
                                $rows = mysqli_fetch_assoc($result);
                                $head = $rows['heading'];
                                $subhead = $rows['Subhead'];
                                $article = $rows['article'];




                                          echo "    <div class='col-md-9 col-sm-9 col-lg-12' text-overflow: ellipsis; white-space: nowrap; overflow: hidden;>
                                                            <hr>
                                                            <a href='newssp.php?id=$id'><h2>$head</h2></a>
                                                            <h4><b>$subhead</b></h4>
                                                            <p>$article</p>

                                                    </div>
                                                    ";

                            ?>

                            </div>
                            <hr>
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
