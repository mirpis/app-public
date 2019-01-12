<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Formularz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="POST">
   <p>Podaj imię:</p>
   <input type="text" name="imie"></br></br>
   <input type="submit" name="button" value="Wyślij"></br></br>
  </form>
<?php
if (isset($_POST['imie'])){
  $imie = $_POST['imie'];
  echo '<strong>Witaj '.$imie.' </strong>';
}

 ?>
</body>
</html>
