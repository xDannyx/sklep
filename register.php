 <?php
      require('baza.php')
      if (isset($_POST['login'])){
        $login = $_POST['login'];
	      $email = $_POST['email'];
        $password = $_POST['psw'];
        $imie = $_POST['imie'];
        $nazwisko =$_POST['nazwisko']
        [$login],[$psw],[$imie],[$nazwisko]
        $sql = "INSERT INTO `klienci`(`login`, `hash_hasla`, `imie`, `nazwisko`) VALUES ([$login],[$psw],[$imie],[$nazwisko])";
        $result = mysqli_query($connection, $sql);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }}
 ?>
 <form action="action_page.php" method="post">
  <div class="container">
  <link rel="stylesheet" type="text/css" href="styles/register.css">
  <form class="form-signing" method="POST">
    <h1>Rejestracja</h1>

    <hr>

    <label for="email"><b>Login</b></label>
    <input type="text" placeholder="Wpisz Login" name="login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Wpisz Haslo" name="psw" required>

    <label for="imie"><b>Imie</b></label>
    <input type="text" placeholder="Wpisz Imie" name="imie" required>

    <label for="imie"><b>Nazwisko</b></label>
    <input type="text" placeholder="Wpisz Nazwisko" name="nazwisko" required>
    <hr>

    <button type="submit" name="registerbtn" class="registerbtn">Rejestruj</button>
  

  
  
  $conn->close(); 													
 
        

  }
  ?>
  </div>

  </div>
</form> 