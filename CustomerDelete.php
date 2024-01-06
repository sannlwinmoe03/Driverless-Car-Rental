<?php 
include('connect.php');
if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	$delete="DELETE FROM customers where id='$id'";
	$query=mysqli_query($connection,$delete);
	if($query)
	{
		echo "<script>window.alert('Customer Delete Successful')</script>";
		echo "<script>window.location='CustomerList.php'</script>";
	}
}

 ?>