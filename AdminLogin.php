<?php 
session_start();	
include('connect.php');
//include('Adminheader.php');
?>

<?php 
		if (isset($_POST['btnlogin'])) {
		$AdminName=$_POST['txtAdminName'];
		$password=$_POST['txtPassword'];
		$query="SELECT * FROM admins 
				WHERE username='$AdminName'
				AND password='$password'";
		$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);
		if ($count>0) {
			$arr=mysqli_fetch_array($result);
			$_SESSION['Admin_ID']=$arr['Admin_ID'];
			$_SESSION['Admin_Name']=$arr['Admin_Name'];
			echo "<script>alert('Admin Login Successful');</script>";
			echo "<script>window.location='ahome.php';</script>";
		}
		else{
			echo "<script>alert('Invalid Login');</script>";
			echo mysqli_error($connection);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="contact_section layout_padding">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                           <form action="AdminLogin.php" method="POST">	
                          	<h2 style="color: darkgoldenrod;">Login Form</h2>
                            <div class="form-group">
                            	<label>User Name</label>
                              <input type="text" class="email-bt" placeholder="Enter your name" name="txtAdminName" type="Name" required>
                            </div>

                            <div class="form-group">
                            	<label>Password</label>
                              <input type="password" class="email-bt" name="txtPassword" placeholder="Enter Password" type="Password" required>
                            </div>

                            

    <div class="form-group">
		<input type="submit" name="btnlogin" value="Login">
								<a href="AdminRegister.php" class="reg">Register</a>
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
	</div> 
                            
                          </form>
                       </div> 
                    </div>
                </div>
    			
    		</div>
    	</div>
    </div>

</body>
</html>
<?php 
//include ('footer.php');
?>