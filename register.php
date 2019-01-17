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



 </head>

<div class="container">

      <form class="form-signin" method="POST">

        <h2 class="form-signin-heading">Please Register</h2>

        <div class="input-group">

	  <span class="input-group-addon" id="basic-addon1">@</span>

	  <input type="text" name="username" class="form-control" placeholder="Username" required>

	</div>

        <label for="inputEmail" class="sr-only">Email address</label>

        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>

        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>

      </form>

</div>