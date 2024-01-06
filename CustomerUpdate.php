<?php
session_start();
include('connect.php'); 
//include('header.php');

if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	$select="SELECT * FROM customers where id='$id'";
	$query=mysqli_query($connection,$select);
	$data=mysqli_fetch_array($query);
	$id=$data['id'];
	$fullName=$data['fullName'];
	$username=$data['username'];
	$email=$data['email'];
	$dob=$data['dob'];
	$phonenumber=$data['phonenumber'];
	$address=$data['address'];
	$postcode=$data['postcode'];
	$city=$data['city'];
	$state=$data['state'];
	$country=$data['country'];
	$gender=$data['gender'];
	$password=$data['password'];
	
}



if(isset($_POST['btnUpdate'])) 
{
	$txtid=$_POST['txtid'];
	$txtfullName=$_POST['txtfullName'];
	$txtusername=$_POST['txtusername'];
	$txtemail=$_POST['txtemail'];
	$txtdob=$_POST['txtdob'];
	$txtphonenumber=$_POST['txtphonenumber'];
	$txtaddress=$_POST['txtaddress'];
	$txtpostcode=$_POST['txtpostcode'];
	$txtcity=$_POST['txtcity'];
	$txtstate=$_POST['txtstate'];
	$txtcountry=$_POST['txtcountry'];
	$txtgender=$_POST['txtgender'];
	$txtpassword=$_POST['txtpassword'];	
	
	

	
	
	$check="Update customers set fullName='$txtfullName', username='$txtusername',email='$txtemail',dob='$txtdob', phonenumber='$txtphonenumber',address='$txtaddress',  postcode='$txtpostcode', city='$txtcity', state='$txtstate', country='$txtcountry', gender='$txtgender' ,password='$txtpassword' where id='$txtid' ";
	$ret=mysqli_query($connection,$check);
	
	if($ret)
	{
		echo"
		<script>
			alert('Customer Update Successful');
			location.assign('CustomerList.php'); 
		</script>";
	}
	else
	{
		echo"
		<script>
			alert('Fail!!');
			
		</script>";
	}
	
}

?>
 		<style>
	.update {
		
		text-align: center;
		background-color: lavender;
		border-collapse: collapse;
	}
		.update th {
		background-color: gainsboro;
		color: gainsboro;
	}
	.update td,
	.update th {
		padding: 10px;
		border: 1px solid lavender;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
		
<body>
		<form action="CustomerUpdate.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="txtid" value="<?php echo $id ?>">
		<table class="update" align="center" width="100%">
			<tr>
				<td align="right" width="38%"><b><u>Full Name</u></b></td>
				<td align="center"><input type="text" name="txtfullName" value="<?php echo $fullName ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Username</u></b></td>
				<td align="center"><input type="text" name="txtusername" value="<?php echo $username ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Email</u></b></td>
				<td align="center"><input type="email" name="txtemail" value="<?php echo $email ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Date Of Birth</u></b></td>
				<td align="center"><input type="date" name="txtdob" value="<?php echo $dob ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Phone Number</u></b></td>
				<td align="center"><input type="text" name="txtphonenumber" value="<?php echo $phonenumber ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Address</u></b></td>
				<td align="center"><input type="text" name="txtaddress" value="<?php echo $address ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Post code</u></b></td>
				<td align="center"><input type="text" name="txtpostcode" value="<?php echo $postcode ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>City</u></b></td>
				<td align="center"><input type="text" name="txtcity" value="<?php echo $city ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>State</u></b></td>
				<td align="center"><input type="text" name="txtstate" value="<?php echo $state ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Country</u></b></td>
				<td align="center"><input type="text" name="txtcountry" value="<?php echo $country ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Gender</u></b></td>
				<td align="center"><input type="text" name="txtgender" value="<?php echo $gender ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Password</u></b></td>
				<td align="center"><input type="password" name="txtpassword" value="<?php echo $password ?>" required></td>
			</tr>
			<!-- <tr>
				<td align="right" width="38%"><b><u>Address</u></b></td>
				<td align="center"><textarea name="txtAddress" required><?php echo $Address ?></textarea></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>DateOfBirth</u></b></td>
				<td align="center"><input type="date" name="txtDateOfBirth" value="<?php echo $DateOfBirth ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Email</u></b></td>
				<td align="center"><input type="email" name="txtEmail" value="<?php echo $Email ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Phone Number</u></b></td>
				<td align="center"><input type="text" name="txtPhoneNumber" value="<?php echo $PhoneNumber ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Gender</u></b></td>
				<td align="center"><input type="text" name="txtgender"  value="<?php echo $Gender ?>" required></td>
			</tr> -->
			<tr>
				<td></td>
				<td align="center"><input type="submit" name="btnUpdate" value="UPDATE"><!-- <input type="submit" name="btnLogOut" value="LOGOUT"> --></td>
				<td width="30%"><td>
			<br><br>
			
				
</tr>

		</table>
	</form>
</body>
</html>
<?php 
	//include('Footer.php');
 ?>
