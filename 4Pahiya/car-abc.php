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
            <?php
                    $id=$_GET['item_id'];
                    $sql = "SELECT * FROM `Car` WHERE `CarId`=$id";
                    if (mysqli_connect_errno())
                  {
                          echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }
                    $result = mysqli_query($conn,$sql);
                    $rows = mysqli_fetch_assoc($result);
                    $name = $rows['Name'];
                   // echo "$name<br>";
                    $price = $rows['Price'];
                   // echo "$price<br>";
                    $rate = $rows['Ratings'];
                    //echo "$rate<br>";
                    $mil = $rows['Mileage'];
                    //echo "$mil<br>";
                    $eng = $rows['Engine'];
                    //echo "$eng<br>";

                    if ($rows['Transmission']=='A') {
                            $trans="Automatic";
                    }
                    else
                    {
                            $trans="Manual";
                    }
                    if($rows['ABS']==1)
                    {
                            $abs="Present";
                    }
                    else
                    {
                          $abs=" Not Present";
                    }
                    if($rows['AirBags']==4)
                    {
                          $front=2;
                          $back=2;
                    }
                    elseif ($rows['AirBags']==2) {
                           $front=2;
                          $back=0;
                    }
                    else
                    {
                             $front=0;
                          $back=0;
                    }

                    $rev = $rows['Review'];
                    $br = $rows['Brand'];
                    $im = $rows['Image'];
                    $type = $rows['Type'];

                    echo "<div class='thumbnail'>
                    <img class='img-responsive' src=$im alt=''>
                    <div class='caption-full'>
                        <h4 class='pull-right'>INR $price L</h4>
                        <h4><a href='#'>$br $name</a>
                        </h4>
                        <p>Engine Capacity : $eng CC</p>
                        <p>Transmission Type : $trans</p>
                        <p>ABS System : $abs</p>
                        <p>Front Airbags : $front        Rear Airbags : $back</p>
                        <p>Transmission Type : $trans</p>
                        <p>Chassis Type : $type</p>
                        <p>Mileage : $mil kmpl</p>
                        <p>$rev</p>
                    </div>


                </div>";

                echo "<div class='jumbotron'>
                        <h2>Dealers</h2>";

                        $sql1 = "SELECT * FROM `Dealer` WHERE `Brand`='$br' AND `Status`=1";
                        if (mysqli_connect_errno())
                      {
                              echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      }
                        $result1 = mysqli_query($conn,$sql1);

                        //$counter=6;
                        echo "<table class='table table-hover table-bordered'>
                             <thead>
                               <tr>

                                 <th>Dealership Name</th>
                                 <th>Phone Number</th>
                                 <th>Alt. Phone Number</th>
                                 <th>E-Mail ID</th>

                                 <th>City</th>
                                 <th>State</th>
                               </tr>
                             </thead>
                             <tbody>";
                        while($rows1 = mysqli_fetch_assoc($result1))
                        {


                                  $name = $rows1['Name'];
                                  $Ph1 = $rows1['PhNo'];
                                  $Ph2 = $rows1['PhNo2'];
                                  $email = $rows1['Eid'];

                                  $im = $rows1['City'];
                                  $st=$rows1['State'];
                                  //$counter--;



                                  echo "
                                           <tr>

                                           <td>$name</td>
                                           <td>$Ph1</td>
                                           <td>$Ph2</td>
                                           <td>$email</td>

                                           <td>$im</td>
                                           <td>$st</td>
                                           </tr>
                                            ";
                        }
                        echo"</tbody>
                   </table>
                   </div>";


            ?>


            </div>
            <div>
                  <h1><a href="interested.php">Interested ?</a></h1>
            </div>

            </div>

        </div>

    </div>
</body>
</html>
