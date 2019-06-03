<?php include './widoki/glowny.php';?>

<div class="container d-flex justify-content-center flex-column mt-5 p-5 col-md-4 border rouned">

  <h3>Zarejestruj się</h3>


  <form method="POST" action="rejestracja.php">
  <b>Login:</b> <input type="text" name="login"><br><br>
  <b>Hasło:</b> <input type="password" name="haslo1"><br>
  <b>Powtórz hasło:</b> <input type="password" name="haslo2"><br><br>
  <b>Email:</b> <input type="text" name="email"><br>
  <input type="submit" value="Utwórz konto" name="rejestruj">
  </form>
  
</div>
