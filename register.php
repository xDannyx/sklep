 <form action="action_page.php">
  <div class="container">
  <link rel="stylesheet" type="text/css" href="styles/register.css">
  
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

    <button type="submit" class="registerbtn">Rejestruj</button>

  if(isset($_POST['registerbtn']))
  {
  <?php
  $servername = "mysql.cba.pl";
  $username = "bazadanychPZ";
  $password = "123456Pz";
  $dbname = "tomekandr";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO klienci (login, hash_hasla, imie, nazwisko) VALUES ('$login','$psw','$imie','$nazwisko')";
  
  $conn->close(); 													
?> 
        

  }

  </div>

  </div>
</form> 