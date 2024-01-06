<?php 
include('connect.php');
//include('adminheader.php');
 ?>
<table id="TableID" class="display" width="1100px">
	<thead>
		<tr>
			<th>No</th>
			<th>Image</th>
			<th>Brand Name</th>
			<th>Car Name</th>			
			<th>Car Type</th>
			<th>Engine Type</th>
			<th>Model</th>
			<th>Color</th>
			<th>Engine Power</th>
			<th>Seats</th>			
			<th>Quantity</th>
			<th>Unit Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$query="SELECT * from cars";
		$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);
		for ($i=0;$i<$count;$i++)
		{
			$rows=mysqli_fetch_array($result);
			$CarID=$rows['CarID'];
			$Image=$rows['Image'];
			$CarBrandsName=$rows['CarBrandsName'];
			$CarName=$rows['CarName'];
			$CarType=$rows['CarType'];
			$EngineType=$rows['EngineType'];
			$Model=$rows['Model'];
			$Color=$rows['Color'];
			$EnginePower=$rows['EnginePower'];
			$Seats=$rows['Seats'];
			$Quantity=$rows['Quantity'];
			$UnitPrice=$rows['UnitPrice'];
			
			
			echo "<tr>";
			echo "<td>".($i+1)."</td>";
			echo "<td>"."<img src='$Image' width='200px' height='auto'>"."</td>";
			echo "<td>".$CarBrandsName."</td>";
			echo "<td>".$CarName."</td>";
			echo "<td>".$CarType."</td>";
			echo "<td>".$EngineType."</td>";
			echo "<td>".$Model."</td>";
			echo "<td>".$Color."</td>";
			echo "<td>".$EnginePower."</td>";
			echo "<td>".$Seats."</td>";
			echo "<td>".$Quantity."</td>";
			echo "<td>".$UnitPrice."</td>";
			
			
			echo "<td><a href='VehicleUpdate.php?CarID=$CarID'>Edit</a> |
			<a href='VehicleDelete.php?CarID=$CarID'>Delete</a></td>";
			echo "</tr>";
		}
			?>
	</tbody>
</table>

<?php 
//include('footer.php');
 ?>