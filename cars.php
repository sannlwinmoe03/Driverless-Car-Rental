<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Cars</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>info@driverless.com</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>+95946948375</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="cprofile.php"><i class="fa fa-user"></i></a></li>              
              <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="clogout.php"><i class="fa fa-sign-out"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="chome.php"><h2>Driverless<em> Car Rental</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="chome.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="cars.php">Cars

                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Cars</h1>
            <span>Our autonomous cars for you.</span>
          </div>
        </div>
      </div>
    </div>

    
    <?php 
 //include('header.php');
 include('connect.php');
                if (isset($_POST['btnSearch']))
            {
                    $CarName=$_POST['txtSearch'];
                    $query="SELECT * FROM cars 
                            WHERE CarName LIKE '%$CarName%'";
                    $result=mysqli_query($connection,$query);
                    $count=mysqli_num_rows($result);
                    if ($count>0)
                    {
                        echo "<table class='car' align='center' width='65%'>";
                        for ($i=0; $i < $count; $i+=1)
                        { 
                    $query1="SELECT * FROM cars 
                            WHERE CarName LIKE '%$CarName%'
                            LIMIT $i,1";
                            $result1=mysqli_query($connection,$query1);
                            $count1=mysqli_num_rows($result1);
                            echo "<tr>";
                            for ($j=0; $j < $count1; $j++)
                            { 
                                $arr=mysqli_fetch_array($result1);
                                echo "<td>";
                                echo "<a href='CarDetail.php?CarID=".$arr['CarID']."'>";
                                echo "<img src='".$arr['Image']."'width='300px'> </a>";
                                echo "<br>";
                                echo "<br>";
                                echo "<b>".$arr['CarName']."</b>";
                                echo "<br>";
                                echo $arr['UnitPrice']." <b>Dollars</b>";
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }

                    else
                {
                    echo "<h1><b><u>Search Record Not Found</u></b></h1>";
                }
            }
                    else
                {   $query="SELECT * FROM cars 
                    ORDER BY CarName";
                    $result=mysqli_query($connection,$query);
                    $count=mysqli_num_rows($result);

                    if ($count>0)
                    {
                        echo "<table class='car' align='center' width='70%'>";
                        for ($i=0; $i < $count; $i+=1)
                        { 
                    $query1="SELECT * FROM cars 
                            ORDER BY CarName
                            LIMIT $i,1";
                            $result1=mysqli_query($connection,$query1);
                            $count1=mysqli_num_rows($result1);
                            echo "<tr>";
                            for ($j=0; $j < $count1; $j++)
                            { 
                                $arr=mysqli_fetch_array($result1);
                                echo "<td>";
                                echo "<a href='CarDetail.php?CarID=".$arr['CarID']."'>";
                                echo "<img src='".$arr['Image']."'width='300px' '> </a>";
                                echo "<br>";
                                echo "<b>".$arr['CarName']."</b>";
                                echo "<br>";
                                echo $arr['UnitPrice']." <b>Dollars</b>";
                                echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
        ?>


    

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Driverless</h4>
            <p> Below are our social media accounts.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="https://www.tesla.com/">Tesla</a></li>
              <li><a href="https://www.pony.ai/">Pony.ai</a></li>
              
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="chome.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>              
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="contact.php" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="btnsubmit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2021 Driverless
                
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 70px;">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="#" id="contact">
                  <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Pick-up location" required="">
                      </fieldset>
                    </div>
                   </div>

                   <div class="col-md-6">
                    <div class="form-group">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Return location" required="">
                      </fieldset>
                    </div>
                   </div>
                  </div>

                  <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                      </fieldset>
                    </div>
                   </div>

                   <div class="col-md-6">
                    <div class="form-group">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Return date/time" required="">
                      </fieldset>
                    </div>
                   </div>
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Enter full name" required="">
                    </fieldset>
                  </div>

                  <div class="row">
                   <div class="col-md-6">
                    <div class="form-group">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Enter email address" required="">
                      </fieldset>
                    </div>
                   </div>

                   <div class="col-md-6">
                    <div class="form-group">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Enter phone" required="">
                      </fieldset>
                    </div>
                   </div>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>