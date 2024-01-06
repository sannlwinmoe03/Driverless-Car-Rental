<?php
include('connect.php'); 
//include('adminheader.php');

if(isset($_REQUEST['CarID']))
{
	$CarID=$_REQUEST['CarID'];
	$select="SELECT * FROM cars where CarID='$CarID'";
	$query=mysqli_query($connection,$select);
	$data=mysqli_fetch_array($query);
	$Image=$data['Image'];
	$CarID=$data['CarID'];
	$CarBrandsName=$data['CarBrandsName'];
	$CarName=$data['CarName'];
	$CarType=$data['CarType'];
	$EngineType=$data['EngineType'];
	$Model=$data['Model'];
	$Color=$data['Color'];
	$EnginePower=$data['EnginePower'];
	$Seats=$data['Seats'];
	$UnitPrice=$data['UnitPrice'];
	$Quantity=$data['Quantity'];
	
}



if(isset($_POST['btnUpdate'])) 
{
	$txtCarID=$_POST['txtCarID'];
	$txtCarBrandsName=$_POST['txtCarBrandsName'];
	$txtCarName=$_POST['txtCarName'];
	$txtCarType=$_POST['txtCarType'];
	$txtEngineType=$_POST['txtEngineType'];
	$txtModel=$_POST['txtModel'];
	$txtColor=$_POST['txtColor'];
	$txtEnginePower=$_POST['txtEnginePower'];
	$txtSeats=$_POST['txtSeats'];		
	$txtQuantity=$_POST['txtQuantity'];
	$txtUnitPrice=$_POST['txtUnitPrice'];

	
	$check="Update cars set CarBrandsName='$txtCarBrandsName', CarName='$txtCarName', CarType='$txtCarType', EngineType='$txtEngineType', Model='$txtModel',  Color='$txtColor', EnginePower='$txtEnginePower', Seats='$txtSeats', Quantity='$txtQuantity', UnitPrice='$txtUnitPrice' where CarID='$txtCarID'";
	$ret=mysqli_query($connection,$check);
	
	if($ret)
	{
		echo"
		<script>
			alert('CarID Update Successful');
			location.assign('VehicleList.php'); 
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
		<form action="VehicleUpdate.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="txtCarID" value="<?php echo $CarID ?>">
		<table class="update" align="center" width="100%">
			<tr>
				<td align="right" width="38%"><b><u>Car Name</u></b></td>
				<td align="center"><input type="text" name="txtCarName" value="<?php echo $CarName ?>" required></td>
			</tr>

			<tr>
				<td align="right" width="38%"><b><u>Car Brands Name</u></b></td>
				<td align="center"><input type="text" name="txtCarBrandsName" value="<?php echo $CarBrandsName ?>" required></td>
			</tr>



			<tr>
				<td align="right" width="38%"><b><u>Car Type</u></b></td>
				<td align="center"><input type="text" name="txtCarType" value="<?php echo $CarType ?>" required></td>
			</tr>

			<tr>
				<td align="right" width="38%"><b><u>Engine Type</u></b></td>
				<td align="center"><input type="text" name="txtEngineType" value="<?php echo $EngineType ?>" required></td>
			</tr>

			<tr>
				<td align="right" width="38%"><b><u>Model</u></b></td>
				<td align="center"><input type="text" name="txtModel" value="<?php echo $Model ?>" required></td>
			</tr>


			<tr>
				<td align="right" width="38%"><b><u>Color</u></b></td>
				<td align="center"><input type="text" name="txtColor" value="<?php echo $Color ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>EnginePower</u></b></td>
				<td align="center"><input type="text" name="txtEnginePower" value="<?php echo $EnginePower ?>" required></td>
			</tr>

			<tr>
				<td align="right" width="38%"><b><u>Seats</u></b></td>
				<td align="center"><input type="number" name="txtSeats" value="<?php echo $Seats ?>" required></td>
			</tr>

			<tr>
				<td align="right" width="38%"><b><u>Quantity</u></b></td>
				<td align="center"><input type="number" name="txtQuantity" value="<?php echo $Quantity ?>" required></td>
			</tr>


			<tr>
				<td align="right" width="38%"><b><u>UnitPrice</u></b></td>
				<td align="center"><input type="text" name="txtUnitPrice" value="<?php echo $UnitPrice ?>" required></td>
			</tr>
			
			
			<tr>
				<td></td>
				<td align="center"><input type="submit" name="btnUpdate" value="UPDATE"><input type="reset" value="Cancel"></td>
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
