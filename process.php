<?php 

  // require "connect.php";
  $dbhost = "localhost";
  $dbuser = "root" ;
  $dbpass = "";
  $dbname = "vitejaz";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

?>
<?php
 if (isset($_POST)){
      $firstname      = $_POST['firstname'];
      $lastname       = $_POST['lastname'];
      $phone          = $_POST['phone'];
      $staticEmail    = $_POST['staticEmail'];
      $inputPassword  = $_POST['inputPassword'];
      
      $sql = "INSERT INTO signup (Firstname,Lastname,Phone,Email,Password) VALUES (?,?,?,?,?)";
      $stmtinsert =  $conn->prepare($sql);
      $stmtinsert->bind_param("sssss", $firstname, $lastname, $phone, $staticEmail, $inputPassword);
      $result =  $stmtinsert->execute();
  }else{
  	echo "No Data";
  }
?>