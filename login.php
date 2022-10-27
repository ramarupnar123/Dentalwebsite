

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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="dental.css">
           
</head>

<body class="">
	<!-- style="background-color: hsl(480,50%,80%);" -->


	<form action="login.php" method="post">
	<div class="container-fluid back" style="height: 700px;">
		<div class="row  back1" id="login"  style="height:700px;">
			<div class="container mt-5">
				<div class="row justify-content-center">
					
				
			<div class="col-md-5 bg-light shadow p-0">
				
				<div class="card p-5 bg-light border-0 ">
					<h1 class="text-center font-weight-bold">Hospital Patient Login Here</h1>
					
					<div class="card-body">

						<div class="row">
							<div class="col-md-12">
							<label>Username OR  Mobile</label>
							<input type="text" name="username" class="form-control" required placeholder="Enter Username">
							<label>Password</label>
							<input type="text" name="password" class="form-control" required placeholder="Enter Password">
						</div>
						<div class="col-md-12 text-center mt-3">
							<button class="btn btn-primary">Login Here</button>
						</div>

						</div>

						</div>
						<div class="card-footer text-center border-0">
							<b>New User<a href="register.php">Register Here</a></b>
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


 //print_r($_POST);
if(isset($_POST['username'])){
	$user=trim($_POST['username']);
	$password=trim($_POST['password']);
	

	$query="SELECT * FROM login1 where (email='".$user."' OR mobile='".$user."')AND password='".$password."'";

		$conn=mysqli_connect('localhost','root','','project1');

		$q=mysqli_query($conn,$query);
		$ar=mysqli_fetch_assoc($q);
		if(($user==$ar['mobile'] || $user==$ar['email']) && $password=$ar['password'])

		{
			session_start();
			 $_SESSION['name']=$ar['name'];
			echo "<script>alert('successful login');window.location.href='login.php';</script>";
			 header('location:Admin/index.php');
		}
		else
		{
			echo "login fail";
		}
}
	?>