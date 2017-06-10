<!DOCTYPE html>
<html lang="en">
<head>
      <title>Dealer Registration</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="./css/navbar.css">
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <script src="./js/jquery.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>

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
                      <li class="active"><a href="dealer.php">Dealers</a></li>
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
            <h1>Are you a dealer?</h1>
            <p>If your answer is yes, we provide you with a great platform to showcase yourself and attract customers.</p>
            <p>Just Fill up the form below to get registered!! Its easy and simple :)</p>
      </div>
      <div class="jumbotron" align-tems:"center";>
              <div class="form-header">
                  <h2 text-align="Center">Form Header</h2>
                  <p>*required field</p>
              </div>
                <form action="dlrdone.php" method="post"/>
                        <p>Name*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="Name" placeholder="Enter Your Store Name" /></p>
                        <p>Phone Number 1*:<input type="number" name="phno" placeholder="Enter Your Phone Number" /></p>
                        <p>Phone Number 2&nbsp;&nbsp;:<input type="number" name="phno2" placeholder="Enter Alternate Phone Number" /></p>
                        <p>Brand*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="brand" placeholder="Enter Your Brand" /></p>
                        <p>Email ID*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="Email" name="email" placeholder="Enter Your Email-ID" /></p>
                        <p>City*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="city" placeholder="Enter Your City" /></p>
                        <p>State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="state" placeholder="Enter Your State" /></p>
                        <p>PIN code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="number" name="pin" placeholder="Enter Your PIN" /></p>
                        <br><br>
                        <input type="submit" name="Submit">
                </form>
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
