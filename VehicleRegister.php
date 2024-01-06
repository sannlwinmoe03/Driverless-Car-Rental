<?php 
	include('connect.php');
	//include('Adminheader.php');
	if (isset($_POST['btnRegister'])) {
		$carname=$_POST['txtcarname'];
		$carbrandsname=$_POST['txtcarbrandsname'];
		$Type=$_POST['txtType'];
		$Color=$_POST['txtcolor'];
		$model=$_POST['txtmodel'];
		$enginepower=$_POST['txtEnginePower'];
		$enginetype=$_POST['txtEngineType'];
		$seat=$_POST['txtseat'];
		$UnitPrice=$_POST['txtUnitPrice'];
		$Quantity=$_POST['txtQuantity'];
		$CarImage=$_FILES['txtVehicleImage']['name'];
		$folder="../images";
		if($CarImage) 
		{
			$filename=$folder.$CarImage;
			$copied=copy($_FILES['txtVehicleImage']['tmp_name'], $filename);
			if (!$copied) 
			{
				exit("Problem Occured. Cannot upload image.");
			}
			else{
				$insert="INSERT INTO cars(Image,CarBrandsName,CarName,CarType, EngineType, Model, Color,EnginePower,Seats,Quantity,UnitPrice)
				         VALUES('$filename','$carbrandsname','$carname','$Type', '$enginetype','$model','$Color','$enginepower','$seat','$Quantity','$UnitPrice')";
				$ret=mysqli_query($connection,$insert);
				if ($ret) {
					echo "<script>alert('Autonomous Car Register Successful');</script>";
				}
				else{
					echo "<script>alert('Car cannot be Registered');</script>";
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<style>
	.myTable {
		
		text-align: center;
		background-color: PapayaWhip;
		border-collapse: collapse;
	}
		.myTable th {
		background-color: orange;
		color: black;
	}
	.myTable td,
	.myTable th {
		padding: 10px;
		border: 1px solid burlywood;
	}
</style>
		<style>
	.Table {
		
		text-align: center;
		background-color: lemonchiffon;
		border-collapse: collapse;
	}
		.Table th {
		background-color: maroon;
		color: maroon;
	}
	.Table td,
	.Table th {
		padding: 10px;
		border: 1px solid white;
	}
</style>
<table class="Table" width="100%"><tr><th>.</th></tr></table>
<br><br>

		<style>
	.tt {
		
		text-align: center;
		background-color: mistyrose;
		border-collapse: collapse;
	}
		.tt th {
		background-color: rosybrown;
		color: black;
	}
	
	.tt th {
		padding: 10px;
		border: 2px solid lavenderblush;
	}
</style>
 <div  align="center" class="tt">
          <th><h1><u>Vehicle Registration</u></h1><th>
        </div>
        <br>
	<form action="VehicleRegister.php" method="POST" enctype="multipart/form-data">
		<table align="center" class="myTable" width="70%" >

			<tr>
				<td>Car Name</td>
				<td><input type="text" name="txtcarname" placeholder="Enter car name" required></td>
			</tr>
			<tr>
				<td>Car Brands Name</td>
				<td><input type="text" name="txtcarbrandsname" placeholder="Enter car brands name" required></td>
			</tr>
						<tr>
				<td>Type</td>
				<td><input type="txtType" name="txtType"
					 placeholder="Enter car type" required></td>
			</tr>
			<tr>
				<td>Colour</td>
				<td><input type="txtColour" name="txtcolor" required></td>
			</tr>
			<tr>
				<td>Model</td>
				<td><input type="txtmodel" name="txtmodel" required></td>
			</tr>
			<tr>
				<td>Engine Power</td>
				<td><input type="txtEnginePower" name="txtEnginePower" required></td>
			</tr>
			<tr>
				<td>Engine Type</td>
				<td><input type="txtEngineType" name="txtEngineType" required></td>
			</tr>	
			<tr>
				<td>Seats</td>
				<td><input type="number" name="txtseat" required></td>
			</tr>	
			<tr>
				<td>UnitPrice</td>
				<td><input type="txtUnitPrice" name="txtUnitPrice" required></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="number" name="txtQuantity" required></td>
			</tr>

			<tr>
				<td>Car Image</td>
				<td><input type="file" name="txtVehicleImage" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnRegister" value="Register"></td>
			</tr>
		</table>
	</form>
	<div align="center"><font color="maroon"><br>To view current vehicle list,
         <a href="VehicleList.php"><b><u>Click here</u></b> </a>.
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
     	</font></div>
	<br><br>
</body>
</html>
<?php
//include ('footer.php');
?>