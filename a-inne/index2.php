<?php
header('Location: zaloguj');
/**
 *
 *
 */
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="utf-8">
        <title>Formularz logowania</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class = "container">

  <?php
  echo '<pre>';
     if(isset($_GET['error'])){
       switch($_GET['error']){
            case 0: echo 'Zaloguj się do systemu'; break;
            case 1: echo 'Proszę wypełnić wszystkie pola'; break;
            case 2: echo 'Użytkownik nie istnieje'; break;
            case 3: echo 'Podane hasło jest nieprawidłowe'; break;

       }
     }
  echo '</pre>';
  ?>

    <form action="logowanie.php" method="POST">

     <label for="login">Login:</label><input type="text" name="login" placeholder="Login"/></br></br>
     <label for="haslo">Hasło:</label><input type="password" name="haslo" placeholder="Hasło"/><br><br>

  <!-- Powtórz Hasło:<br><input type="password" name="haslo2"/><br><br>
     Nickname: <br><input type="text" name="nick"/><br><br>
     E-mail: <br><input type="text" name="email"/><br><br> -->


     <input type="submit"  value="Zaloguj" name="log_in"></br></br>

</body>
</html>
