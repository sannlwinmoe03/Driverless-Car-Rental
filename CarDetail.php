<?php 
	include('Connect.php');
	//include 'header.php';
	if (isset($_REQUEST['CarID'])) 
	{
		$CarID=$_REQUEST['CarID'];
		$query="SELECT * FROM cars 
				WHERE CarID='$CarID'";
		$result=mysqli_query($connection,$query);
		$arr=mysqli_fetch_array($result);
	}
	else
	{
		echo "<script>alert('Please Choose a Car');</script>";
		echo "<script>window.location='cars.php';</script>";
	}
 ?>
 <!DOCTYPE html>
 <html>
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
              <li><a href="clogout.php">Logout</a></li>
              <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="home.html"><h2>Driverless<em> Car Rental</em></h2></a>
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

	
<div>
 		<input type="hidden" name="txtCarID" value="<?php echo $arr['CarID'] ?>">
 	<table>
 		<tr>
 			<td>
 				<img src="<?php echo $arr['Image']; ?>" width="350px">
 			</td>
 			<td>
 				<h1><?php echo $arr['CarName']; ?></h1>
 				Brand: <b><?php echo $arr['CarBrandsName']; ?></b><br>
 				Car Type: <b><?php echo $arr['CarType']; ?></b><br>
 				Engine Type: <b><?php echo $arr['EngineType']; ?></b><br>
 				Model: <b><?php echo $arr['Model']; ?></b><br>
 				Color: <b><?php echo $arr['Color']; ?></b><br>				
 				Engine Power: <b><?php echo $arr['EnginePower']; ?></b><br>
 				Seats: <b><?php echo $arr['Seats']; ?></b><br>
 				Quantity: <b><?php echo $arr['Quantity']; ?></b><br>
 				<h2><?php echo $arr['UnitPrice']; ?> Dollar</h2><br>
 			<a href="cars.php">Back</a>
 			<style type="text/css">
									a:hover
									{
										color: red;
									}
									a
									{
										color: red;
									}

								</style>
 				<br>
 			</td>
 		</tr>
 	</table>
 </div>
 	
 </body>
 </html>
 <?php 
include 'footer.php';
  ?>