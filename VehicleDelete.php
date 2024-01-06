<?php 
include('connect.php');
if(isset($_REQUEST['CarID']))
{
	$CarID=$_REQUEST['CarID'];
	$delete="DELETE FROM cars where CarID='$CarID'";
	$query=mysqli_query($connection,$delete);
	if($query)
	{
		echo "<script>window.alert('Car Delete Successful')</script>";
		echo "<script>window.location='VehicleRegister.php'</script>";
	}
}

 ?>