<?php 
include ('connect.php');
//include ('Adminheader.php');

if(isset($_POST['btnRegister']))
{
	$Name=$_POST['txtA_Name'];
	$Email=$_POST['txtemail'];
	$Password=$_POST['txtpassword'];
	$username=$_POST['txtusername'];
	
	$ins="INSERT into admins(adminname,email,password,username)
			  values('$Name','$Email','$Password','$username')";
		$ret=mysqli_query($connection,$ins);

		if ($ret) 
		{
			echo "<script>
				 	alert('Admin recorded');
				  </script>";
			echo "<script>window.location='AdminLogin.php'</script>";
			
		}
}

?>

<div class="contact_section layout_padding">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
                    <div class="input_main">
                       <div class="container">
                          <form action="AdminRegister.php" method="POST" enctype="multipart/form-data">
                          	<h2 style="color: darkgoldenrod;">Admin Register</h2>
                            <div class="form-group">
                              <input type="text" class="email-bt" name="txtA_Name" placeholder="Enter Name" required/>
                            </div>

                            <div class="form-group">
                              <input type="text" class="email-bt" name="txtusername" placeholder="Enter Username" required/>
                            </div>

                            <div class="form-group">
                              <input type="email" class="email-bt" name="txtemail" required placeholder="Enter Email Address"/>
                            </div>

                            <div class="form-group">
                              <input type="password" class="email-bt" name="txtpassword" placeholder="Enter Password" required/>
                            </div>

                            

                            <div class="form-group">
		<button class="tm-submit.btn" type="submit" name="btnRegister">Register</button>
	</div> 
                            
                          </form>
                       </div> 
                    </div>
                </div>
    			
    		</div>
    	</div>
    </div>


<?php 
//include ('footer.php');
 ?>