<?php 
include('connect.php');
 ?>
<table id="TableID" class="display" width="1100px">
	<thead>
		<tr>
			<th>No</th>
			<th>Full Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Date of Birth</th>
			<th>Phone Number</th>
			<th>Address</th>
			<th>Postcode</th>
			<th>City</th>
			<th>State</th>
			<th>Country</th>
			<th>Gender</th>
			<th>Password</th>			
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$query="SELECT * from customers";
		$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);
		for ($i=0;$i<$count;$i++)
		{
			$rows=mysqli_fetch_array($result);
			$id=$rows['id'];
			$txtfullName=$rows['fullName'];
			$txtusername=$rows['username'];
			$txtemail=$rows['email'];
			$txtdob=$rows['dob'];
			$txtphonenumber=$rows['phonenumber'];
			$txtaddress=$rows['address'];
			$txtpostcode=$rows['postcode'];
			$txtcity=$rows['city'];
			$txtstate=$rows['state'];
			$txtcountry=$rows['country'];
			$txtgender=$rows['gender'];
			$password=$rows['password'];
			
			
			//$txtgender=$rows['Gender'];
			
			//$txtImage=$rows['Images'];
			echo "<tr>";
			echo "<td>".($i+1)."</td>";
			echo "<td>".$txtfullName."</td>";
			echo "<td>".$txtusername."</td>";
			echo "<td>".$txtemail."</td>";
			echo "<td>".$txtdob."</td>";
			echo "<td>".$txtphonenumber."</td>";
			echo "<td>".$txtaddress."</td>";
			echo "<td>".$txtpostcode."</td>";
			echo "<td>".$txtcity."</td>";
			echo "<td>".$txtstate."</td>";
			echo "<td>".$txtcountry."</td>";
			echo "<td>".$txtgender."</td>";
			echo "<td>".$password."</td>";
			
			
			
			//echo "<td>".$txtdob."</td>";
			//echo "<td>"."<img src='$txtImage' width='200px' height='auto'>"."</td>";
			echo "<td><a href='CustomerUpdate.php?id=$id'>Edit</a> |
			<a href='CustomerDelete.php?id=$id'>Delete</a></td>";
			echo "</tr>";
		}
			?>
	</tbody>
</table>