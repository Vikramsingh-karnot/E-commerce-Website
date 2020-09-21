
<!DOCTYPE html>
<html>
<head>
	<title>E-com AboutUs</title>
</head>

<meta charset="utf-8">

 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="main.css">

<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&family=Grenze+Gotisch&display=swap" rel="stylesheet"> 

<body style="font-family: 'Changa', sans-serif;">

 <nav class="navbar navbar-expand-md" style="background-color: black;">
  <!-- Brand -->
  <a class="navbar-brand" href="index.html"><img src="images/vitejaslogo.png" style="width: 100%;height: 130px;"></a>

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
      <li class="nav-item">
        <a class="nav-link" href="add_items.php"><b>Add</b></a>
      </li>
    </ul>
  </div>
</nav> 

<div class="form_contact col-10 col-md-10 col-lg-7" style="margin: auto;">
  <form action="contact.php" method="post">
     <!-- first name -->
    <div class="form-group row">
      <label for="firstname" class="col-sm-2 col-form-label" style="color: #fff;">
        First Name :
      </label>
      <div class="col-sm-10">
        <input style="background-color: #000;" type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your first name" required>
      </div>
    </div>

    <br>

    <!-- last name -->
    <div class="form-group row">
      <label for="lastname" class="col-sm-2 col-form-label" style="color: #fff;">
        Last Name :
      </label>
      <div class="col-sm-10">
        <input style="background-color: #000;" type="text" class="form-control" name="lastname"  id="lastname" placeholder="Enter your last name" required>
      </div>
    </div>

    <br>

    <!-- phone -->
    <div class="form-group row">
      <label for="phone" class="col-sm-2 col-form-label" style="color: #fff;">
        Phone :
      </label>
      <div class="col-sm-10">
        <input style="background-color: #000;" type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone" required>
      </div>
    </div>

    <br>

    <!-- email -->
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label" style="color: #fff;">
        Email :
      </label>
      <div class="col-sm-10">
        <input style="background-color: #000;" type="email" class="form-control" name="staticEmail" id="staticEmail" placeholder="Enter your e-mail" required>
      </div>
    </div>


    <br>

    <!-- password -->
    <div class="form-group row">
      <label for="inputPassword"  style="color: #fff;" class="col-sm-2 col-form-label">
        Password :
      </label>
      <div class="col-sm-10">
        <input type="password" style="background-color: #000;" placeholder="Enter the password" class="form-control" name="inputPassword" id="inputPassword" required>
      </div>
    </div>

    <br>

    <div class="form-group row pt-4">
      <div class="col-lg-4 col-md-4 col-sm-12" style="padding-left: 180px;">
          <button type="submit" name="create" id="register" style="width: 200px; background-color: #fb7c24;color: #fff;" class="btn">
            <b>Sign up</b>
          </button>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12" style="padding-left: 180px;">
          <button type="submit" style="float: right;width: 200px;background-color: #fb7c24;color: #fff;" 
                class="btn">
          <b>Sign in</b>
        </button>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12" style="padding-left: 180px;">
        
      </div>
    </div>
  </form>
</div>

<br><br><br><br><br>
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
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  $('#register').click(function(e){

    var valid=this.form.checkValidity();
    if(valid){

      var firstname = $('#firstname').val();
      var lastname = $('#lastname').val();
      var phone = $('#phone').val();
      var staticEmail = $('#staticEmail').val();
      var inputPassword = $('#inputPassword').val();


      e.preventDefault();

      $.ajax({
        type : 'POST',
        url  : 'process.php',
        data : {firstname: firstname, lastname: lastname, phone: phone, staticEmail: staticEmail, inputPassword: inputPassword},
        success : function(data){

          swal({
                title: "Registration successful!",
                text: "You're Registered Now!",
                icon: "success",
                button: "OK",
              })

        },
        error : function(data){
          swal({
                title: "Error",
                text: 'there were error while saving the data!',
                icon: "error",
                button: "OK",
              })
        },

      });
    }else{
      alert('Please Enter the Details and then try to register!');
    }

  });

</script>
</body>
</html>