<?php
include 'connect.php';
session_start();
error_reporting(0);
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
 		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/orderdetails.css"></link>
		<script>
			function getselected()
                			{
                				 var selectvalue=document.getElementById("list").value;
                				
                				
                				if(selectvalue=='--Select Item--')
                				{
                					document.getElementById("total").value="";
                					document.getElementById("quantity").value="";
                				}

                				var quan=document.getElementById("quantity").value;
                				 var selectvalue=document.getElementById("list").value;
                 				
                				
                				if(selectvalue=='Cake')
                				{
                					document.getElementById("total").value = 15*quan;
                				}
                				else if(selectvalue=='Samosa')
                				{
                					document.getElementById("total").value=15*quan;
                				}
                				else if(selectvalue=='Tea')
                				{
                					document.getElementById("total").value=10*quan;

                				}
                				else if(selectvalue=='Coffee')
                				{
                					document.getElementById("total").value=10*quan;
                				}
                				else
                				{
                					document.getElementById("total").value="";
                				}
                			}
                		</script>
</head>

<style>

@media(min-width: 768px) and (max-width: 991px){
	.formStyle{
		width:65%;
		margin: 100px auto;
}
}
@media(min-width: 575px) and (max-width: 767px){
	.formStyle{
		width:70%;
		margin: 100px auto;
}
}

@media(min-width: 480px) and (max-width: 574px){
	.formStyle{
		width:95%;
		margin: 100px auto;
}
}
@media(max-width: 479px){
	.formStyle{
		width:95%;
		margin: 100px auto;
}
}


</style>
<body>
	

<!-- header with navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="background-color:#003366; width:100%">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a href="#" class="navbar" style="text-decoration:none;"><p class="heading" style="width:100%;">ABC Restaurant</p></a> </span>
    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar" style="margin-left:40%; margin-top:1%; font-size:16px;">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.php">Home</a></li>
		  <li class="active_nav"><a href="addorder.php" target="_self" style="color: #fff;">Add Order</a></li>
		   <li><a href="reports.php">View Report</a></li>
	 </ul>
       
	 
      <ul class="nav navbar-nav navbar-right" >
	  <li> <a href="#" style="text-transform:uppercase; color:#CCCCCC; text-decoration:none;">Welcome :- <span class="glyphicon glyphicon-user">
	  	
	  	<!-- displaying session -->
	  	<?php 
	  		echo $_SESSION['uname']; ?>
	  	</a></span></li>
   
		 </span> </li>
       
       <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
      </ul>
    </div>
  </div>
</nav>


<!-- starting the container -->
<div class="container-fluid formStyle">
		<div class="row headingrow">
				<div class="col-md-12">
					<h3 class="text-center">Add order details</h3>
				</div>
		</div>

		<div class="container-fluid forminner">
			<form class="form-horizontal" method="POST">
				<label for="orderdate" class="labelstyle">Date</label>
				<div class="form-group input-group">
					<span class="input-group-addon" style="background-color:rgba(245, 240, 240, 0.04);">
						<span class="glyphicon glyphicon-calendar" style="color:rgba(78, 152, 233, 0.79);"></span>
					</span>
					<input type="date" name="orderdate" id="orderdate" placeholder="Order Date" class="txtStyle">
				</div>

				<label for="item" class="labelstyle">Item</label>
                <div class="form-group input-group">
                   <span class="input-group-addon" style="height:41px; background-color:rgba(245, 240, 240, 0.04); ">
                       <span class="glyphicon glyphicon-list-alt" style="color:rgba(78, 152, 233, 0.79);" ></span>
                   </span>
			
				<!-- adding items from the database -->
                   
                   
                  <select name="list" id="list" class="txtStyle" onchange="getselected();">
                  	<option>--Select Item--</option>

                  	<?php
                   	$sql=mysqli_query($conn,"select * from item");
                   while($row=mysqli_fetch_array($sql))
                   {
                   	?>
                   		<option><?php echo $row['itemName']; ?></option>
                  
                   <?php
                   		 }
                   ?>
                	</select>
                	
                	</div>
                	<label for="quantity" class="labelstyle">Quantity</label>
                	<div class="form-group input-group">
                		<span class="input-group-addon" style="background-color:rgba(245, 240, 240, 0.04);">
                			<span class="fa fa-info-circle" style="color:rgba(78, 152, 233, 0.79);"></span>
                		</span>
                		<input type="number" name="quantity" id="quantity" class="txtStyle" required="" placeholder="Enter the Quantity" onkeyup="getselected();">
                	</div>
                	
                	<label for="total" class="labelstyle">Total Amount</label>
                	<div class="form-group input-group">
                		<span class="input-group-addon" style="background-color:rgba(245, 240, 240, 0.04);"">
                			<span class="fa fa-inr" style="color:rgba(78, 152, 233, 0.79);"></span>
                		</span>
                	<input type="number" name="total" id="total" class="txtStyle" placeholder="Total Amount">


                		                         	
 				</div>
 				<input type="submit" value="Submit" name="submit" class="btn btn-success btnstyle">	
       <p class="" >
         
          <?php
          
      if (isset($_POST['submit'])) 
        {
            $dateoforder=$_POST['orderdate'];
            $item=$_POST['list'];
            $quan=$_POST['quantity'];
            $total=$_POST['total'];
            $name=$_SESSION["uname"];

           

            $sql="insert into sold_item values('$name','$item','$dateoforder','$quan','$total')";
              if(mysqli_query($conn,$sql))
              {

                echo "<p class='text-center' style='color:#fff;'>Your order has been added. Thank You</p>";
                ?>
                 
                 <meta http-equiv="refresh" content="3;url=index.php">                 
                
                      <script type="text/javascript">
                        $(function()
                          { clearInput(); })
                      </script>

                <?php
              } 
              else
              {
                 echo "<p class='text-center text-danger'>Error ..!! Please try again. </p>";
              }  

        }  
  ?>    
</p>


 		
<script type="text/javascript">
	function clearInput() 
	{
        $("#list, #orderdate, #total, #quantity").each(function() {
           $(this).val('');
        });
    }
</script>			

			</form>				
		</div>
</div>
</div>


<!-- footer section -->
<div class="container-fluid" style="margin-bottom: 100px;">
&nbsp;
</div>
<?php
  include ('footer.php');
?>

</body>
</html>