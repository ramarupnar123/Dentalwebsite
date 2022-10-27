<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="dental.css">
</head>
<style type="text/css">
	label{
		font-weight: bolder;
	}
</style>


<body class="">
	<!-- style="background-color: rgba(0%,0%,100%,0.3);" -->

	<form action="register.php" method="post">
		<div class="container-fluid  back" style="height:700px">
			<div class="row justify-content-center back1" style="height:700px">
				<div class="container mt-5">
					<div class="row justify-content-center">
						
			

				<div class="col-md-6 shadow p-0">
					<div class="card p-5 bg-light">
						<h1 class="text-center font-weight-bold"> New Registration</h1>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<label>Name:</label>
									<input type="text" name="name" class="form-control" placeholder="Enter Name" required>

								</div>
								<div class="col-md-6">
									<label>Surname:</label>
									<input type="text" name="surname" class="form-control" placeholder="Enter Surname" required>
									
								</div>
								<div class="col-md-6 mt-3">
									<label>Email:</label>
									<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
									
								</div>
								<div class="col-md-6 mt-3">
									<label>Mobile:</label>
									<input type="number" name="mobile" class="form-control" placeholder="Enter Mobile" required>
									
								</div>
								<div class="col-md-12 mt-3">
									<label>Address:</label>
									<input type="text" name="address" class="form-control" placeholder="Enter Address" required>
									
								</div>
								
								<div class="col-md-6 mt-3">
									<label>Password:</label>
									<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
									
								</div>
								<div class="col-md-6 mt-3">
									<label>Conform Password:</label>
									<input type="password" name="cpassword" class="form-control" placeholder="Enter Conform password" required>
									
								</div>
								<div class="col-md-12 text-center mt-3 mt-3">
									<button class="btn btn-primary">Register Here</button>
								</div>
							</div>
							    <div class="card-footer text-center mt-3 border-0">
							        <b>New User<a href="login.php">Login Here</a></b>
						        </div>

						        		</div>
			                      	</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</form>



</body>
</html>


<?php 
print_r($_POST);

if(isset($_POST['name']))
{
	if($_POST['password']==$_POST['cpassword'])
	{
		$conn=mysqli_connect('localhost','root','','project1');
		$query="INSERT INTO login1 (name,surname,email,mobile,password) VALUES ('".$_POST['name']."','".$_POST['surname']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['password']."')";
			$fire=mysqli_query($conn,$query);
			if($fire)
			{
				header('location:login.php');
			}
			else
			{
				echo "not success register";
			}

		echo "password is correct";
	}
	else
	{
		echo "incorrect password";
	}
}
?>