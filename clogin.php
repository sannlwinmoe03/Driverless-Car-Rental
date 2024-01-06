<?php 
session_start();	
include('connect.php');
//include('header.php');
if(isset($_POST['btnlogin']))
{
	
	$username=$_POST['txtusername'];
	$password=$_POST['txtpassword'];

		$select="SELECT * FROM customers where username='$username' and password='$password'";
		$query=mysqli_query($connection,$select);
		$count=mysqli_num_rows($query);
		if($count>0)
		{

			$data=mysqli_fetch_array($query);
			$id=$data['id'];
			$customername=$data['Customer_Name'];
			$_SESSION['id']=$id;
			$_SESSION['cname']=$customername;

			echo "<script>alert('Login Successful')</script>";
			echo "<script>window.location='chome.php'</script>";
		}

			else
		{
			if (isset($_SESSION['loginError']))
			{
				$countError=$_SESSION['loginError'];
				if ($countError==1)
			{
				$_SESSION['loginError']=2;
				echo "<script>window.alert('Login failed! Please try again! Error Attempt 2')</script>";
			}
			if ($countError==2)
			{
				echo "<script>window.alert('Login failed! Error Attempt 3! Account is locked for 10mins! Please try again later.')</script>";
				echo "<script>window.location='LoginTimer.php'</script>";
			}
		
		}
			else
			{
				$_SESSION['loginError']=1;
				echo "<script>window.alert('Login failed! Please try again! Error Attempt 1')</script>";
			}
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

	<title>Login Form - Driverless</title>
</head>
<body>
    <div class="container-fluid">
		<div class="row d-flex justify-content-center">
			 <form action="clogin.php" method="POST">	
				
				<p class="login-text" style="font-size: 2rem; color: white; font-weight: 800;">Customer Login</p>

				<div class="mb-3 row">
					<label for="txtusername" class="col-sm-2 col-form-label" style="color:white;" >Username</label>
					<div class="col-sm-10">
						<input type="text" placeholder="Enter Username" name="txtusername" class="form-control" id="email" value="" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="password" class="col-sm-2 col-form-label" style="color:white">Password</label>
					<div class="col-sm-10">
						<input type="password" placeholder="Password" name="txtpassword" class="form-control" id="password" value="" required>
					</div>
				</div>

                <div class="mb-3 row d-flex justify-content-center">
                    <button class="btn btn-primary col-3 col-md-2" name="btnlogin">Login</button>
                </div>
                <p class="login-register-text" style="color: white;">Don't have an account? <a href="cregister.php">Register Here</a>.</p>
			</form>
		</div>
    
			</div>
			<!-- CSS only -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		</body>
		</html>