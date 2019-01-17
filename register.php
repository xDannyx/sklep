<?php

$connection =new mysqli('mysql.cba.pl','bazadanychPZ','123456Pz');

if (!$connection){

    die("Database Connection Failed" . mysqli_error($connection));

}

$select_db = mysqli_select_db($connection,'tomekandr');

if (!$select_db){

    die("Database Selection Failed" . mysqli_error($connection));

}

if (isset($_POST['username']) && isset($_POST['password'])){

  $username2 = $_POST['username'];

$email2 = $_POST['email'];

  $password2 = $_POST['password'];



  $query = "INSERT INTO `user` (username, password, email) VALUES ('$username2', '$password2', '$email2')";

  $result = mysqli_query($connection, $query);

  if($result){

      $smsg = "User Created Successfully.";

  }else{

      $fmsg ="User Registration Failed";

  }

}

?>





 <head>



<!-- Latest compiled and minified CSS -->



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >







<!-- Optional theme -->



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >







<link rel="stylesheet" href="styles.css" >







<!-- Latest compiled and minified JavaScript -->



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>







		<title>Projekt Farby - rejestracja</title>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">

		<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">

		<link rel="stylesheet" type="text/css" href="styles/responsive.css">

		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">

		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">

		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">





 </head>



<div class="container">



      <form class="form-signin" method="POST">



        



        <div class="input-group">



	  



	  <input type="text" name="username" class="form-control" placeholder="Username" required>



	</div>



        <label for="inputEmail" class="sr-only">Email address</label>



        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>



        <label for="inputPassword" class="sr-only">Password</label>



        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>



        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>







      </form>



</div>