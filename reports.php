<?php
include 'connect.php';
session_start();

	if ($_SESSION["uname"]==true) 
	{
		
	} 
else {
	header('location:login.php');
	}

$name=$_SESSION["uname"];


	$sqlquery="SELECT date, sum(quantity) FROM sold_item where empname='$name' group by date ";
	$result=mysqli_query($con, $sqlquery);
	$chart_data='';

	while($row=mysqli_fetch_array($result))
	{
		$chart_data .="{date:'".$row['date']."',quantity:".$row['sum(quantity)']."}, ";
	}

	$chart_data=substr($chart_data, 0, -2);

	/* second function */

	$sqlquery1="SELECT itemsold, sum(quantity) FROM sold_item where empname='$name' group by itemsold";
	$result1=mysqli_query($con, $sqlquery1);
	$bar_data='';

	while($row1=mysqli_fetch_array($result1))
	{
		$bar_data .="{itemsold:'".$row1['itemsold']."',quantity:".$row1['sum(quantity)']."}, ";
	}

	$bar_data=substr($bar_data, 0, -2);

/* pie chart query */
 $sqlquery2="SELECT itemsold, quantity FROM sold_item WHERE empname='$name' GROUP BY itemsold ";
  $result2=mysqli_query($con, $sqlquery2);  


?>

<!DOCTYPE html>
<html>
<head>
	<title>ABC Restaurant :: Reports</title>

	<meta name="viewport" content="widht=device-width, initial-scale=1">

	<!-- chart CDN -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
		
		<!-- external css -->
		<link rel="stylesheet" href="css/line.css">

		<!-- pie chart -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Products', 'Quantity'],
          
          <?php
            while ($row2=mysqli_fetch_array($result2)) {
              echo "['".$row2["itemsold"]."',".$row2["quantity"]."],";
              
            }
          ?>         
          
        ]);

        var options = {
          title: 'Product Sales',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
  </script>

</head>
<body>
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
			        <li><a href="index.php">Home</a></li>
					  <li><a href="addorder.php" target="_self">Add Order</a></li>
					   <li class="active_nav"><a href="report.php" target="_self" style="color: #fff;">View Report</a></li>
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

<!-- main division of the content -->

<div class="container-fluid text-block " style="margin: 100px 0px;">
	<h2 class="text-center" style="color:#460e86; text-shadow:1px 1px 1px #ff6a00;">Sales Report </h2>
	<!-- division for line chart -->
	<div class="row" style="box-shadow:0 5px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 8px 0 rgba(0, 0, 0, 0.21);">
		

			<div class="col-md-6" id="chart" style="height: 500px;">
			<h4 class="text-center">Line Graph for date wise sales </h4>
			</div>


	
		
		<div class="col-md-6" id="piechart_3d" style="height: 500px;">
			<h4 class="text-center">Pie chart for products sales sold by quantity</h4>
			</div>
	</div>
</div>

<!-- bar graph division -->
<div class="container-fluid" style="margin: 0 auto; margin-bottom: 100px; margin-top: 50px; width: 60%; box-shadow:0 5px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 8px 0 rgba(0, 0, 0, 0.21); ">
	<h4 class="text-center">Bar graph for product wise sales</h4>
	<div id="graph" style="width: 30%; height: 500px; margin: 0 auto;"></div>
</div>	

<!-- footer section -->
<?php
	include ('footer.php');
?>

</body>
</html>

<!-- javascript code for charts -->

<script>
	Morris.Line({
		element: 'chart',
		data : [<?php echo $chart_data; ?>],
		xkey : 'date',
		ykeys : ['quantity'],
		labels : ['Total Sales'],
		hidehover : 'auto',
	});


	Morris.Bar({
		element: 'graph',
		data : [<?php echo $bar_data; ?>],
		xkey : 'itemsold',
		ykeys : ['quantity'],
		labels : ['Total Sales'],
		hidehover : 'auto',
		color : 'red',
		
	});
</script>

