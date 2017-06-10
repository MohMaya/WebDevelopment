<!DOCTYPE html>
<html lang="en">
<head>
      <title>Finance Option</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="./css/navbar.css">
      <link rel="stylesheet" type="text/css" href="./css/style.css">
      <script src="./js/jquery.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
      <script>
          function calculate()
          {
              p = document.getElementById("p").value;
              n = document.getElementById("n").value;
              r = document.getElementById("r").value;
              result1 = document.getElementById("result1");
              result2 = document.getElementById("result2");
              inter = p*n*r/100;
              nm = n*12;
              amt=Number(p)+Number(inter);
              result1.innerHTML = "EMI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:INR " + (amt/nm);
              result2.innerHTML = "The Interest is :&nbsp;INR " + inter;
          }
      </script>

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
                      <li class="active"><a href="finance.php">Finance</a></li>
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

      <div class="col-lg-12">
              <div class="col-lg-4"></div>
              <div class="col-lg-4">
                        <h1>Interest Calculation</h1>

                        Amount&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input id="p"><br><br><br>
                        Bank&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<select name="bank" id="r">
                                    <option value="12.5">State Bank of India(12.5% ROI)</option>
                                    <option value="12.32">Bank of Baroda(12.32% ROI)</option>
                                    <option value="12.55">HSBC(12.55% ROI)</option>
                                    <option value="12.53">HDFC(12.53% ROI)</option>
                            </select><br><br><br>
                        Duration&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<select name="years" id="n">
                                            <option value="1">12 months</option>
                                            <option value="1.5">18 months</option>
                                            <option value="2">24 months</option>
                                            <option value="2.5">30 months</option>
                                            <option value="3">36 months</option>
                                            <option value="5">60 months</option>
                                        </select><br><br><br>
                        <p id="result1"></p><br>
                        <p id="result2"></p><br>
                        <button onclick="calculate()">Calculate</button>



              </div>
              <div class="col-lg-4"></div>
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
