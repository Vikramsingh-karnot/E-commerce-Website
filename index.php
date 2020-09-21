<?php 
	require 'connect.php';
	$dbhost = "localhost";
	$dbuser = "root" ;
	$dbpass = "";
	$dbname = "vitejaz";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>

<!DOCTYPE html>
<html>
<head>
	<title>E-com</title>
</head>

<meta charset="utf-8">

 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="main.css">

<link rel="stylesheet" type="text/css" href="aos.css">


<body>

 <nav class="navbar navbar-expand-md" style="background-color: black;">
  <!-- Brand -->
  <a data-aos="zoom-out" data-aos-duration="1550" class="navbar-brand" href="#"><img src="images/vitejaslogo.png" style="width: 100%;height: 130px;"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav navbar-center">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><b>Home</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.php"><b>Shop</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><b>About</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><b>Contact</b></a>
      </li>
    </ul>
  </div>
</nav> 

	<section style="margin-top: 0px;
                  margin-left: 30px;
                  margin-right: 30px;
                  padding-bottom: 100px;" > 
		<div class="row">
			<div data-aos="zoom-in-right" data-aos-duration="1550" class="col-lg-4 col-md-4 col-sm-12">
      <a href="shopOrder.php?id=6">
				<img src="images/col1.jpg">
      </a>
			</div>
			<div data-aos="zoom-in" data-aos-duration="1550" class="col-lg-4 col-md-4 col-sm-12" >
        <a href="shopOrder.php?id=5">
				<img src="images/col2.jpg">
        </a>
			</div>
			<div data-aos="zoom-in-left" data-aos-duration="1550" class="col-lg-4 col-md-4 col-sm-12">
      <a href="shopOrder.php?id=7">
				<img src="images/col3.jpg">
      </a>
			</div>
		</div>
	</section>

  <section style="padding-top: 50px;">
  <a href="shopOrder.php?id=16">
    <div class="col-lg-12" style="background-color: #eee;">
    <div style="float: left; 
              width: 50%;
              color: #323f7b;
              background-color: #eee;
              text-align: center;
              font-family: 'Candal', sans-serif;
              ">
      
      <p data-aos="zoom-out" data-aos-duration="1550"  style="font-size: 75px;
                margin-top: 23%;
                text-shadow: 0 2px 5px rgba(0, 0, 0, .5);">
        No.1 Trend
    </p>
    <p data-aos="zoom-out" data-aos-duration="1550"  style="font-size: 50px;
              padding-left: 10px;
              text-shadow: 0 2px 5px rgba(0, 0, 0, .5);">
        Rockerz 400 MI Edition
    </p>

  </div >
      <img data-aos="zoom-in" data-aos-duration="1550"
           src="images\mi_boat.png" 
           class="animation" 
           id="header" 
           alt="Trending"  
           style="width: 50%;">   
    </div>
</a>
  </section >

<section >
<a href="shopOrder.php?id=17">
  <div class="col-lg-12" style="background-color:  #f1948a;">
    <img data-aos="zoom-out-right" data-aos-duration="1550"
           src="images\boat_earpod.png" 
           class="animation" 
           id="header" 
           alt="Trending"  
           style="width: 50%;"> 

    <div style="float: right; 
      width: 50%;
      color: #eb4448;
      background-color:  #f1948a;
      text-align: center;
      font-family: 'Candal', sans-serif;
      ">
      
      <p data-aos="zoom-in-left" data-aos-duration="1550"  style="font-size: 75px;
                margin-top: 33%;
                text-shadow: 0 2px 5px rgba(0, 0, 0, .3);">
        Airdopes 201
    </p>
    <p data-aos="zoom-in-left" data-aos-duration="1550"  style="font-size: 40px;
              padding-left: 10px;
              text-shadow: 0 2px 5px rgba(0, 0, 0, .3);">
        New IPX 4 Sweat and Water Resistant
    </p>

  </div >
  </div>
</a>
</section>

<section>
  <a href="shopOrder.php?id=18">
    <div class="col-lg-12" style="background-color: #fff;">
    <div style="float: left; 
              width: 50%;
              color: #222329;
              background-color: #fff;
              text-align: center;
              font-family: 'Candal', sans-serif;
              ">
      
      <p data-aos="zoom-out-right" data-aos-duration="1550"  style="font-size: 65px; 
                margin-top: 23%;
                text-shadow: 0 2px 5px rgba(0, 0, 0, .28);">
        Bose Sport Earbuds
    </p>
    <p data-aos="zoom-out-right" data-aos-duration="1550"  style="font-size: 35px;
              padding-left: 10px;
              text-shadow: 0 2px 5px rgba(0, 0, 0, .28);">
        Engineered for your best workout yet
    </p>

  </div >
      <img data-aos="zoom-in" data-aos-duration="1550"
           src="images\bose.jpeg" 
           class="animation" 
           id="header" 
           alt="Trending"  
           style="width: 50%;">   
    </div>
</a>
  </section >

<br><br>
<footer class="mainfooter" role="contentinfo" style="margin-top: 0px;">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
      </div>
      <div class="col-md-4 col-sm-12 text-center">
      	<h2><b>Follow us on!!</b></h2>
      	<br>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
             <li><a href="#" class="icoInsta" title="Instagram"><i class="fa fa-instagram"></i></a></li>
             <li><a href="#" class="icoYoutube" title="Youtube"><i class="fa fa-youtube"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            </ul>	
      </div>
      <div class="col-md-4 col-sm-12">
      </div>
    </div>
    <br>
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2018 - VITEJAZ.  All rights reserved.</p>
		</div>
	</div>


  </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>