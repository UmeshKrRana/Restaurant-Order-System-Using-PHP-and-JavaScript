<?php
$conn=mysqli_connect("localhost","root","","project");
?>


<!DOCTYPE html>
<html>
<head>
	<title>ABC Restaurant:: Employee Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/reg.css">
	
<style>
		.inner_div{
			box-shadow:0 5px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 8px 0 rgba(0, 0, 0, 0.21);
		}

		.heading_div{
			border-bottom: 2px solid #0897AD;
			border-top: 2px solid #0897AD;
		}

		.heading_style{
			 color:#0EA856;
             text-shadow:1px 1px 1px #ff6a00;
             font-size: 26px;
             margin-top: 1px;
             padding: 8x;
		}

		.txtStyle{
		    width: 100%;
		    height: 40px;
		    border: 1px solid #34B894;
		    font-size: 16px;
		    font-family: arial;
		    paddin-top: 10px;
		    line-height: 10px;
		}

		.btnstyle{
			width: 107%;
			margin-left: -3%;
			height: 45px;
			font-size: 20px;
			letter-spacing: 1px;
			margin-top: 10px;

		}
</style>

</head>
<body>
	<div class="container-fluid headertop navbar-fixed-top">
		<h2> <a href="login.php">ABC Restaurant</a></h2>
	</div>

<!-- main division -->
<div class="container-fluid" style=" margin: 100px 0px;">

<!-- inner division -->
	<div class="container-fluid inner_div" style="margin: 0 auto; width: 50%; margin-bottom: 50px;">
		<div class="container heading_div" style="margin: 0 auto; width: 100%; margin-bottom: 50px;">
			<h3 class="text-center heading_style">Employee Registration</h3>
		</div>


		<div class="container-fluid" style="margin: 0 auto; width: 80%;">
			<form class="form-horizontal" method="POST">
				<div class="form-group input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>
				</span>
				    <input type="text" name="empname" class="txtStyle" placeholder="Enter the Name" required="" class="txtStyle">
			    </div>

			    <div class="form-group input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>
				</span>
				    <input type="text" name="user" class="txtStyle" placeholder="Enter the User Name" required="" class="txtStyle">
			    </div>

			    <div class="form-group input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
				</span>
				    <input type="password" name="pass" class="txtStyle" placeholder="Enter the Password" required="" class="txtStyle">
			    </div>

			    <div class="form-group input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-phone"></span>
				</span>
				    <input type="number" name="phone" class="txtStyle" placeholder="Enter the Phone no." required="" class="txtStyle">
			    </div>
			    <div class="form-group input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-envelope"></span>
				</span>
				    <input type="email" name="email" class="txtStyle" placeholder="Enter the Email" required="" class="txtStyle">
			    </div>
			    <div class="form-group input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-home"></span>
				</span>
				    <input type="text" name="address" class="txtStyle" placeholder="Enter the Address" required="" class="txtStyle">
			    </div>


			    <input type="submit" name="submit" value="Register" class="btn btn-success btnstyle">
			    <p class="text-center"> 

			<?php
			   	if(isset($_REQUEST["submit"]))
				{
			    	$name=$_POST['empname'];
			    	$username=$_POST['user'];
			    	$password=$_POST['pass'];
			    	$phone=$_POST['phone'];
			    	$email=$_POST['email'];
			    	$add=$_POST['address'];

			    	$sql="insert into registration values('$name','$username','$password','$phone','$email','$add')";
			    	$sql1="insert into login values ('$username','$password')";
						if(mysqli_query($conn,$sql)&&(mysqli_query($conn,$sql1)))
						{
							echo "<p class='text-center text-success'> Registration successfully completed </p>";
							echo "<p class='text-center text-primary'> You are redirecting to login page.</p>";
							?>
							<meta http-equiv="refresh" content="4;url=login.php"> 
							<?php
						}
						else
						{
							echo "<p class='text-center text-danger'> Not added ".mysqli_error($conn) ."</p>";
						}
			    }

			    	?>
			    </p>
			    <p class="text-center text-primary" style="font-size: 16px;"><a href="login.php">Already Registered?</a></p>
		    </form>
		    <br/>
		</div>
	</div>
</div>	<!-- closing of main div -->

<?php
include ('footer.php');
?>
</body>
</html>