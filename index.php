<?php

?>
<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" hrefs="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    </head>
    
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Railway Reservation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="reservations.php">Book</a>
      </li>
    </ul>
    <ul class="nav navbar-right">
       <li class="nav-item my-2 my-sim-0">
           <a class="nav-link" href="log.php">Log In</a>
       </li>
       <li class="nav-item my-2 my-sim-0">
           <a class="nav-link" href="registration.php">Sign Up</a>
       </li>  
    </ul>
  </div>
</nav>
<!--  navbar end --> 
<!--
<div id="home" class="back">
    	<h1 id="cool">
    	<br>
    	<br>
  		<a href="" class="typewrite" data-period="2000" data-type='[ "SENSE&#x25A0PERCEIVE&#x25A0SUCCEED", "IEEE SIGNAL PROCESSING SOCIETY" ]'>
   	 	<span class="wrap"></span>
  		</a>
		</h1>

    </div>
   -->
<!-- Content -->  
     
    <div class="container">
      <div class="jumbotron">
          <h2><center><b>WELCOME TO</b></center></h2>
         <div class="thumbnail">
             <img src="hell.png" alt="" width="1000px">
         </div>
         
          <h3>About Indian Railways</h3>
          <hr>
          <p>Indian Railways (IR) is India's national railway system operated by the Ministry of Railways. It manages the fourth largest railway network in the world by size, with a route length of 67,368-kilometre (41,861 mi) and total track length of 121,407-kilometre (75,439 mi) as of March 2017. Routes are electrified with 25 kV AC electric traction while 33% of them are double or multi-tracked.</p>
      </div>
      
       <div class="row">
        	<div class="col-lg-4">
        		<div class="thumbnail">
        		<img src="images/portfolio/21.jpg" >
        		<h3><center><a href="trains.php">View Availability</a></center></h3>
        		</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="thumbnail">
        		<img src="images/portfolio/11.jpg">
        		<h3><center><a href="reservations.php">Reservation</a></center></h3>
        		</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="thumbnail">
        		<img src="images/portfolio/31.jpg">
        		<h3><center><a href="cancellation.php">Cancellation</a></center></h3>
        		</div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-lg-4">
        		<div class="thumbnail">
        		<img align="middle" src="images/portfolio/61.jpg">
        		<h3><center><a href="display.php">Print Ticket</a></center></h3>
        		</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="thumbnail">
        		<img src="lo.jpg">
        		<h3><center><a href="log.php">Register/Login In</a></center></h3>
        		</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="thumbnail">
        		<img align="middle" src="images/portfolio/5.jpg">
        		<h3><center><a href="lucky.php">Special Offers</a></center></h3>
        		</div>
        	</div>
        </div>
    </div>    

<?php
    include("footer.php")
    ?>
    <script  src="index.js"></script>
</body>
    
</html>