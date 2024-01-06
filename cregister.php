<?php


include('connect.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	$postcode = $_POST['postcode'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM customers WHERE email='$email'";
		$result = mysqli_query($connection, $sql);
		if ($result->num_rows < 0) {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}
		else {

			$sql = "INSERT INTO customers (fullname,username,email,dob,phonenumber,address,postcode,city,state,country,gender,password)
					VALUES ('$fullname','$username','$email','$dob','$phonenumber','$address','$postcode','$city','$state','$country','$gender','$password')";
			$result = mysqli_query($connection, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				// sessionadd($id, $fullname, $username, $email, $dob, $phonenumber, $address, $postcode, $city, $state, $country, $gender, $password);
				header("Location: clogin.php");
			}
			
			else {
				echo "<script>alert('Failed!')</script>";
			}
		}
	}
	else {
		echo "<script>alert('Woops! Check your password.')</script>";
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Driverless</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row d-flex justify-content-center">
			<form class="col-5 card" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
				
				<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>

				<div class="mb-3 row">
					<label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
					<div class="col-sm-10">
						<input type="text" name="fullname" class="form-control" id="fullname" value="" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="username" class="col-sm-2 col-form-label">User Name</label>
					<div class="col-sm-10">
						<input type="text" name="username" class="form-control" id="username" value="" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" id="email" value="">
					</div>
				</div>

				<div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">DOB</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="dob" id="dob" value="" required>
                    </div>
                </div>


					<div class="mb-3 row">
						<label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
						<div class="col-sm-10">
							<input type="text" name="phonenumber" class="form-control" id="phone" value="" required>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="address" class="col-sm-2 col-form-label">Address</label>
						<div class="col-sm-10">
							<input type="text" name="address" class="form-control" id="address" value="" required>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="code" class="col-sm-2 col-form-label">Post Code</label>
						<div class="col-sm-10">
							<input type="text" name="postcode" class="form-control" id="code" value="" required>
						</div>
					</div>


					<div class="mb-3 row">
						<label for="city" class="col-sm-2 col-form-label">City</label>
						<div class="col-sm-10">
							<input type="text" name="city" class="form-control" id="city" value="" required>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="state" class="col-sm-2 col-form-label">State Region</label>
						<div class="col-sm-10">
							<input type="text" name="state" class="form-control" id="state" value="" required>
						</div>
					</div>

					<div class="mb-3 row">
						<label for="country" class="form-label">Country</label>
						<select id="country" name="country" class="form-select" value="<?php echo $country; ?>" required>
						  <option selected>Choose your country</option>
						  <option value="UnitedState">United State</option>
  							<option value="UnitedKingdom">United Kingdom</option>
  							<option value="China">China</option>
  							<option value="Japan">Japan</option>
							  <option value="Myanmar">Myanmar</option>
						</select>
					  </div>


					
					
					<div class="mb-3">
						<label for="code" class="col-sm-2 col-form-label">Gender</label>
						
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
						<label class="form-check-label" for="male">Male</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
						<label class="form-check-label" for="inlineRadio2">Female</label>
					</div>
					</div>
					<div class="mb-3 row">
						<label for="password" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" name="password" class="form-control" id="password" value="" required>
						</div>
					</div>
					<div class="mb-3 row">
						<label for="cpassword" class="col-sm-2 col-form-label">Confirm password</label>
						<div class="col-sm-10">
							<input type="password" name="cpassword" class="form-control" id="cpassword" value="" required>
						</div>
					</div>
					<div class="mb-3 row d-flex justify-content-center">
						<button class="btn btn-primary col-3 col-md-2" name="submit">Register</button>
					</div>
					<p class="login-register-text">Have an account? <a href="clogin.php">Login Here</a>.</p>
					

				</form>
			</div>
		
	</div>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</body>
</html>