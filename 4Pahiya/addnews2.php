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
                      <li><a href="news.php">News</a></li>

                 </ul>



                 <ul class="nav navbar-nav navbar-right" id="myNavbar">
                       <li><a href="adminlog.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                 </ul>
                 </div>
            </div>
      </nav>

        <div class="col-lg-12">
                <ul class="nav nav-tabs">

                    <li class="active"><a data-toggle="tab" href="#menu1">NewsAdder</a></li>
                    <li><a data-toggle="tab" href="#menu2">Manage Dealers</a></li>
                    <li><a data-toggle="tab" href="#menu3">Add A Car</a></li>
                    <li><a data-toggle="tab" href="#menu4       ">View Cars</a></li>
                 </ul>

                 <div class="tab-content">
                         <div id="menu1" class="tab-pane fade in active">
                         <div class="jumbotron">
                                 <h1>News Adder</h1>
                                 <p>Gotta new piece of news? Put it out. YAY!!!</p>
                         </div>
                         <hr>
                             <div class="col-md-12" id="news">
                                     <h4><a href="news.php"><b>News</b></a></h4>
                                     <div class="jumbotron" align-tems:"center";>
                                             <div class="form-header">
                                                <p>*required field</p>
                                             </div>
                                               <form action="nwsdone.php" method="post"/>
                                                       <p>Title*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="title" size="50" placeholder="Enter the Title of the article" /></p>
                                                       <p>Subheading&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="shead" size="80" placeholder="Enter the Subheading" /></p>
                                                       <p>Main Article&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p><textarea name="art" rows="25" cols="80" placeholder="Enter the main article"></textarea>
                                                        <br><br>
                                                       <input type="submit" name="Submit">
                                               </form>
                                       </div>

                                     </div>
                                     <hr>
                         </div>

                         <div id="menu2" class="tab-pane fade">

                                <?php
                                        $did=$_POST['did'];
                                        $auth=$_POST['authno'];
                                        $sql1 = "UPDATE `Dealer` SET `Status`=1,`Auth`=$auth WHERE `Did`=$did";
                                        if (mysqli_connect_errno())
                                      {
                                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                      }
                                        $result = mysqli_query($conn,$sql1);

                                ?>
                                 <div class="jumbotron">
                                         <h1>Dealers List</h1>
                                 </div>
                                 <div class="jumbotron">
                                         <h3>Approved Dealers</h3>
                                 </div>
                                 <div class="jumbotron">
                                         <?php

                                                 $sql = "SELECT * FROM `Dealer` WHERE `Status`=1 ORDER BY `Brand` ";
                                             if (mysqli_connect_errno())
                                           {
                                                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                           }
                                             $result = mysqli_query($conn,$sql);
                                             //$counter=6;
                                             echo "<table class='table table-hover table-bordered'>
                                                  <thead>
                                                    <tr>
                                                      <th>Dealer Id</th>
                                                      <th>Dealership Name</th>
                                                      <th>Phone Number</th>
                                                      <th>Alt. Phone Number</th>
                                                      <th>E-Mail ID</th>
                                                      <th>Brand</th>
                                                      <th>City</th>
                                                      <th>State</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>";
                                             while($rows = mysqli_fetch_assoc($result))
                                             {

                                                       $id=$rows['Did'];
                                                       $name = $rows['Name'];
                                                       $Ph1 = $rows['PhNo'];
                                                       $Ph2 = $rows['PhNo2'];
                                                       $email = $rows['Eid'];
                                                       $br = $rows['Brand'];
                                                       $im = $rows['City'];
                                                       $st=$rows['State'];
                                                       //$counter--;



                                                       echo "
                                                                <tr>
                                                                <td>$id</td>
                                                                <td>$name</td>
                                                                <td>$Ph1</td>
                                                                <td>$Ph2</td>
                                                                <td>$email</td>
                                                                <td>$br</td>
                                                                <td>$im</td>
                                                                <td>$st</td>
                                                                </tr>
                                                                 ";
                                             }
                                             echo"</tbody>
                                        </table>";
                                         ?>
                                 </div>

                                 <div class="jumbotron">
                                         <h3>Dealers Applied for Acceptance</h3>
                                 </div>

                                 <div class="jumbotron">
                                         <?php

                                                 $sql = "SELECT * FROM `Dealer` WHERE `Status`=0 ORDER BY `Brand` ";
                                             if (mysqli_connect_errno())
                                           {
                                                   echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                           }
                                             $result = mysqli_query($conn,$sql);
                                             //$counter=6;
                                             echo "<table class='table table-hover table-bordered'>
                                                  <thead>
                                                    <tr>
                                                      <th>Dealer Id</th>
                                                      <th>Dealership Name</th>
                                                      <th>Phone Number</th>
                                                      <th>Alt. Phone Number</th>
                                                      <th>E-Mail ID</th>
                                                      <th>Brand</th>
                                                      <th>City</th>
                                                      <th>State</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>";
                                             while($rows = mysqli_fetch_assoc($result))
                                             {

                                                       $id=$rows['Did'];
                                                       $name = $rows['Name'];
                                                       $Ph1 = $rows['PhNo'];
                                                       $Ph2 = $rows['PhNo2'];
                                                       $email = $rows['Eid'];
                                                       $br = $rows['Brand'];
                                                       $im = $rows['City'];
                                                       $st=$rows['State'];
                                                       //$counter--;



                                                       echo "
                                                                <tr>
                                                                <td>$id</td>
                                                                <td>$name</td>
                                                                <td>$Ph1</td>
                                                                <td>$Ph2</td>
                                                                <td>$email</td>
                                                                <td>$br</td>
                                                                <td>$im</td>
                                                                <td>$st</td>
                                                                </tr>
                                                                 ";
                                             }
                                             echo"</tbody>
                                        </table>";
                                         ?>
                                 </div>
                                 <div class="jumbotron">
                                        <h3>Authenticate</h3>
                                        <form action="addnews2.php" method="post">
                                             <p>Auth ID:      </p><input type="number" name="authno"><br><br>
                                             <p>Dealer ID: </p><input type="number" name="did"><br><br>
                                             <input type="submit" value="Authenticate">
                                             </form>
                                 </div>

                        </div>


                        <div id="menu3" class="tab-pane fade">
                        <div class="jumbotron">
                                <h1>Add A Car</h1>
                                <p>New Model of car released? Put it up here to enter it in the Database</p>
                        </div>
                        <hr>
                            <div class="col-md-12" id="news">
                                    <h4><a href="news.php"><b>CAR</b></a></h4>
                                    <div class="jumbotron" align-tems:"center";>
                                              <form action="cardone.php" method="post"/>
                                                      <p>Brand&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="brand" size="50" placeholder="Enter the Brand of the Car" /></p>
                                                      <p>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="name" size="50" placeholder="Enter the name of the car" /></p>
                                                      <p>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="price" size="50" placeholder="Enter the Price in Lacs" /></p>
                                                      <p>Ratings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<select name="rating">
                                                          <option value="1">1 Star</option>
                                                          <option value="2">2 Star</option>
                                                          <option value="3">3 Star</option>
                                                          <option value="4">4 Star</option>
                                                          <option value="5">5 Star</option>
                                                        </select></p>
                                                      <p>
                                                      <p>Mileage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="mil" size="50" placeholder="Enter the Mileage in KMPL" /></p>
                                                      <p>Engine&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="eng" size="50" placeholder="Enter the Engine Capacity in CC"/></p>
                                                      <p>Transmission&nbsp;&nbsp;:<select name="transmission">
                                                          <option value="A">Automatic</option>
                                                          <option value="M">Manual</option>
                                                        </select></p>
                                                        <p>ABS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<select name="abs">
                                                            <option value="1">Present</option>
                                                            <option value="0">Not Present</option>
                                                          </select></p>
                                                        <p>Airbags&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<select name="airbags">
                                                            <option value="0">Zero</option>
                                                            <option value="1">One</option>
                                                            <option value="4">Four</option>
                                                        </select></p>
                                                        <p>Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<select name="type">
                                                            <option value="Hatch">HatchBack</option>
                                                            <option value="MUV">MUV</option>
                                                            <option value="Sedan">Sedan</option>
                                                            <option value="Sport">Sport</option>
                                                            <option value="SUV">SUV</option>
                                                        </select></p>

                                                      <p>
                                                        Image adress&nbsp;:<input type="text" name="addr" size="50" placeholder="Enter the Image Adress for the car" /></p>

                                                      <p>Review &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p><textarea name="rev" rows="25" cols="80" placeholder="Enter the review of the car"></textarea>
                                                       <br><br>
                                                      <input type="submit" name="Submit">
                                              </form>
                                      </div>

                                    </div>
                                    <hr>
                        </div>

                        <div id="menu4" class="tab-pane fade">
                                <div class="jumbotron">
                                        <h1>Cars List</h1>
                                </div>
                                <div class="jumbotron">
                                        <?php

                                                $sql = "SELECT * FROM `Car` ORDER BY `Car`.`CarId` ASC";
                                            if (mysqli_connect_errno())
                                          {
                                                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                          }
                                            $result = mysqli_query($conn,$sql);
                                            //$counter=6;
                                            echo "<table class='table table-hover table-bordered'>
                                                 <thead>
                                                   <tr>
                                                     <th>Car Id</th>
                                                     <th>Brand</th>
                                                     <th>Name</th>
                                                     <th>Price(in Lacs)</th>
                                                     <th>Ratings[/5]</th>
                                                     <th>Mileage(in KMPL)</th>
                                                     <th>Engine(CC)</th>
                                                     <th>Transmission</th>
                                                     <th>ABS</th>
                                                     <th>Airbags</th>
                                                     <th>Type</th>
                                                   </tr>
                                                 </thead>
                                                 <tbody>";
                                                 $result = mysqli_query($conn,$sql);
                                                 //$counter=6;
                                                 while($rows = mysqli_fetch_assoc($result))
                                                 {

                                                           $id=$rows['CarId'];
                                                           $br = $rows['Brand'];
                                                           $name = $rows['Name'];
                                                           $price = $rows['Price'];
                                                           $rate = $rows['Ratings'];
                                                           $mil = $rows['Mileage'];
                                                           $eng = $rows['Engine'];
                                                           $trans = $rows['Transmission'];
                                                           $abs = $rows['ABS'];
                                                           $arb = $rows['AirBags'];
                                                           $type = $rows['Type'];
                                                           //$counter--;



                                                           echo "
                                                                        <tr>
                                                                        <td>$id</td>
                                                                        <td>$br</td>
                                                                        <td>$name</td>
                                                                        <td>$price</td>
                                                                        <td>$rate</td>
                                                                        <td>$mil</td>
                                                                        <td>$eng</td>
                                                                        <td>$trans</td>
                                                                        <td>$abs</td>
                                                                        <td>$arb</td>
                                                                        <td>$type</td>

                                                                        </tr>
                                                             ";
                                                 }
                                            echo"</tbody>
                                       </table>";
                                        ?>
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
