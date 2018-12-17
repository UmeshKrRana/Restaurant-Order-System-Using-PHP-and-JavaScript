<?php
session_start();
include('connect.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<title>ABC Restaurant :: Employee Login </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
		
		<!-- external css -->
		<link rel="stylesheet" href="css/login.css">
		
		<style>
		
		@media(min-width: 991px){
			.main_div{
            width: 40%;
			margin: 100px auto;
           
			}
			
			.inner_div{
            width:100%;
            padding:10%;
            margin:0 auto; 
            height:350px; 
            background-color:rgba(9, 2, 2, 0.21);
            z-index: 3;                      
}
		}
		
		@media(min-width: 767px) and (max-width: 991px){
			.main_div{
            width:55%;
			margin: 100px auto;
           
			}
			
			.inner_div{
            width:100%;
            padding:10%;
            margin:0 auto; 
            height:350px; 
            background-color:rgba(9, 2, 2, 0.21);
            z-index: 3;                      
}
		}
		
		@media(min-width: 575px) and (max-width: 768px){
			.main_div{
            width:70%;
			margin: 100px auto;
           
			}
			
			.inner_div{
            width:100%;
            padding:10%;
            margin:0 auto; 
            height:350px; 
            background-color:rgba(9, 2, 2, 0.21);
            z-index: 3;                      
}
		}
		
		@media(min-width: 480px) and (max-width: 574px){
			.main_div{
            width:95%;
			margin: 100px auto;
           
			}
			
			.inner_div{
            width:100%;
            padding:10%;
            margin:0 auto; 
            height:350px; 
            background-color:rgba(9, 2, 2, 0.21);
            z-index: 3;                      
}
		}
		
		@media(max-width: 479px){
			.main_div{
            width:95%;
			margin: 100px auto;
           
			}
			
			.inner_div{
            width:100%;
            padding:10%;
            margin:0 auto; 
            height:350px; 
            background-color:rgba(9, 2, 2, 0.21);
            z-index: 3;                      
}
		}
		</style>

	</head>
	<body>
	<div class="container-fluid headertop navbar-fixed-top">
		<h2> <a href="login.php">ABC Restaurant</a></h2>
	</div>
	
		<div class="main_div">
        
        <div class="container-fluid" style="border-top:3px solid #149b4d; border-bottom:4px solid #2c71bd; border-radius:4px;">
            <h3>Employee Login Panel</h3>
        </div>

        <div class=" inner_div">           
            <form class="form-horizontal" method="POST">
                <div class="form-group input-group">
                   <span class="input-group-addon" style="height:41px; background-color:rgba(245, 240, 240, 0.04); ">
                       <span class="glyphicon glyphicon-user" style="color:rgba(78, 152, 233, 0.79);" ></span>
                   </span>
                         <input type="text" name="uname" class="txtStyle" required="" placeholder="Enter the username">                   
 				</div>

                <div class="form-group input-group">
                   <span class="input-group-addon" style="height:41px; background-color:rgba(245, 240, 240, 0.04);">
                       <span class="glyphicon glyphicon-lock" style="color:rgba(78, 152, 233, 0.79);"></span>
                   </span>
                          <input type="password" class="txtStyle" name="pass" required="" placeholder="Enter the password">
				</div>

                <div class="form-group input-group">
                  <p class="chkStyle" style="color:white;">
                    <input type="checkbox" value="remember" name="remember" />Remember me                      
                    </p>
                </div>
				<input type="submit" class="btn btn-success btnStyle" name="submit" value="Login">
				                  
                  <p class="text-center" style="color:#FFFFFF;"> 
				  	<?php
				  		if(isset($_POST["submit"]))
							{
								$user=$_POST["uname"];
								$pass=$_POST["pass"];

								$query= "SELECT * FROM login WHERE username='$user' AND password='$pass' ";
								$mydata = mysqli_query($con, $query);
								$result = mysqli_num_rows($mydata);
								if($result==1)
								{
									echo $_SESSION["uname"]=$user;
									//header('Location:index.php');
									?>
									<meta http-equiv="refresh" content="0; url='index.php'">
									<?php
								}
								else
								{
									echo"<p style='color:orange; text-align:center;'> invalid username & password</p>";
								}
							}
				  	?>
				</p>                 
                
            </form>			
        </div>
	 <div class="container" style="width:100%; margin-top: -20px">
           
		   
			<div class="row bg-primary" style="width: 52%; margin: 0 auto; background-color: #800080;">	

				<div class="col-md-12" style="margin-top: 5px;">
					<p align="center" class="text-center"><a href="EmpRegistration.php" target="_blank" class="linkStyle"></i><span class="linkStyle">New User? </span></a></p>
				</div>
			</div>			
        </div>
    </div>
	
<!-- footer area -->
   <?php
   include('footer.php');
   ?>
        
</body>
</html>

