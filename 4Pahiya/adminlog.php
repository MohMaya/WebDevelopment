<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/navbar.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<?php include 'includes/db.php'; ?>
</head>
<body>
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

                   </ul>



                   <ul class="nav navbar-nav navbar-right" id="myNavbar">
                         <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                   </ul>
                   </div>
              </div>
        </nav>

	<div class="main-w3layouts wrapper">
		<h1>Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<script>
				function validateForm() {
					var x = document.forms["myForm"]["uname"].value;
					var y = document.forms["myForm"]["pass"].value;
					if ((x == "admin")&&(y=="admin")) {
					return true;
							}
					else {
						alert("Incorrect Credentials");
						return false;
					}
				}
				</script>
				<form name="myForm" onsubmit="return validateForm()" method="post" action="addnews.php">
					<input class="text" type="text" name="uname" placeholder="Username" required="">
					<input class="text" type="password" name="pass" placeholder="Password" required="">
					<div class="clear"> </div>

					<input type="submit" value="LOGIN">
				</form>

			</div>
		</div>



		<ul class="w3lsg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

</body>
</html>
