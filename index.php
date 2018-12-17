<?php
session_start();
echo $user = $_SESSION["uname"];

if(!isset($_SESSION["uname"])){
	header('location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<title>ABC Restaurant :: Employee Login </title>
	<meta charset="utf-8">
	    <meta name="viewport" content="widht=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
 		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- //font-awesome-icons -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

  <style>   
      .carousel-inner img {
          width: 100%;
          height: 50%;
      }
  </style>

		
		<!-- external css -->
		<link rel="stylesheet" href="css/index.css">
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
        <li class="active_nav"><a href="index.php" style="color: #fff;">Home</a></li>
		  <li><a href="addorder.php" target="_self">Add Order</a></li>
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


<!-- carousel -->

<div class="container-fluid" style="width: 100%; margin:0 auto; padding: 0px;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      
      <div class="item active">
        <img src="images/slide/slide2.jpg" alt="slide2" style="width:100%;">
        <div class="carousel-caption">
        <h1 style="font-family: Helvetica header; font-size: 50px; font-style: italic; margin-bottom: 200px;">Welcome to Our Place </h1>        
      </div>
      </div>


      <div class="item">
        <img src="images/slide/slide4.jpg" alt="slide4" style="width:100%;">
      <div class="carousel-caption">
        <h1 style="font-family: Helvetica header; font-size: 50px; font-style: italic; margin-bottom: 200px;">Good Food is Good Mood </h1>        
      </div>
      </div>
    
      <div class="item">
        <img src="images/slide/slide6.jpg" alt="slide6" style="width:100%;">
        <div class="carousel-caption">
        <h1 style="font-family: Helvetica header; font-size: 50px; font-style: italic; margin-bottom: 200px;">The Best is Yet to Come </h1>
      </div>
      </div>

      <div class="item">
        <img src="images/slide/slide7.jpg" alt="slide7" style="width:100%;">
        <div class="carousel-caption">
        <h1 style="font-family: Helvetica header; font-size: 50px; font-style: italic; margin-bottom: 200px;">Life Happens Coffee Helps </h1>        
      </div>
      </div>

      <div class="item">
        <img src="images/slide/slide9.jpg" alt="slide9" style="width:100%;">
         <div class="carousel-caption">
        <h1 style="font-family: Helvetica header; font-size: 50px; font-style: italic; margin-bottom: 200px;">Embrace the Gloriours Mess that You Are </h1>        
      </div>
      </div>
      
      <div class="item">
        <img src="images/slide/slide10.jpg" alt="slide10" style="width:100%;">
         <div class="carousel-caption">
        <h1 style="font-family: Helvetica header; font-size: 50px; font-style: italic; margin-bottom: 200px;">Good Food Good Life </h1>        
      </div>
      </div>
    </div> 

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> <!-- end carousel -->
</div>

<!-- our menu content -->
<div class="container-fluid">
  <h2 class="text-center" style="font-weight: bolder;">Our Delicious Menu </h2>

  <div class="row" style="width: 80%; margin:0 auto; margin-top: 50px;">
    <div class="col-md-3">
      <h3 class="text-center" style="font-weight: bold;">Cake</h3>
      <img class="img-responsive img-thumbnail" src="images/cake.jpg" style="margin:5px;">
    </div>

    <div class="col-md-3">
       <h3 class="text-center" style="font-weight: bold;"> Coffee</h3>
       <img class="img-responsive img-thumbnail" src="images/coffee.jpg" style="margin:5px;">
    </div>

    <div class="col-md-3">
       <h3 class="text-center" style="font-weight: bold;">Tea</h3>
       <img class="img-responsive img-thumbnail" src="images/tea.jpg" style="margin:5px;">
    </div>

     <div class="col-md-3">
       <h3 class="text-center" style="font-weight: bold;">Samosa</h3>
       <img class="img-responsive img-thumbnail" src="images/samosa.jpg" style="margin:5px;">
    </div>

  </div>
</div>

<!-- about section -->
	<div class="container-fluid" style="margin-top:40px; width:100%; margin-bottom: 20px;"> 
      <h2 class="text-center" style="font-weight: bolder;">Who We Are</h3>
        <div class="row" style="width: 80%; margin: 0 auto;">
          <div class="col-md-7" style="margin-top: 20px;">
            <img class="img-responsive" src="images/back55.jpg">
        </div>
        <div class="col-md-5" style="margin-top: 20px;">
          <blockquote><p style="text-align: justify; font-size: 16px;">We know few things in life beat sharing a fantastic meal with friends or a loved one... and that all starts with reserving your table. </p> 

            <p style="text-align: justify; font-size: 16px;">Whether it's missing a table at a hot new restaurant, trying to find the best places in a new city, or just struggling to find the right place for your big night out... we get it. Getting more Kiwi diners into more great Kiwi restaurants is what we're all about.  
             <p style="text-align: justify; font-size: 16px;"> <strong> ABC Restaurant </strong> is a direct partnership with India's leading dining associations (the Restaurant Association of India. 
          </p></blockquote>
        </div>

  </div>
</div>


    <!-- footer section -->
  <?php
    include('footer.php');
  ?>
    </body>
</html>


