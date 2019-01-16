<?php

session_start();

if(isset($_POST['log_in'])){ // JEŻELI ZOSTAŁO WYSŁANE ['log_in'] // TO:

  $login = $_POST['login'];
  $haslo = $_POST['haslo'];

  if(empty($login) || ($haslo)){
    header("Location: index.php?error=1");
    exit;
  }

  $dbc_h = @mysqli_connect('localhost', 'root', '', 'korepetycje2019') or die ("Nie udało sie połączyć z bazą");

  mysqli_set_charset($dbc_h, "utf8");

  $wynik = mysqli_query($dbc_h, "SELECT * from klienci WHERE login = '$login' ") or die(mysqli_error($dbc_h));

  $rows = mysqli_fetch_array($wynik);

 /*
 $db= mysql_connect('localhost', 'root', '') or die ("Nie udało sie połączyć z bazą danych!");

 mysql_select_db('korepetycje2019');

$wynik = mysql_query("SELECT * FROM `klienci` WHERE `login` = `$login`") or die ("Nie udało sie pobrać danych!");

$rows = mysql_fetch_array($wynik);
*/

  if($login != $rows['login']) {
    header("Location: index.php?error=2");
    exit;
  }

  if($haslo != $rows['haslo']) {
    header("Location: index.php?error=3");
    exit;
  }

  if( ($login == $rows['$login']) && ($haslo == $rows['haslo']) ){
    $_SESSION['zalogowany'] = 1;
    header("Location: zalogowany.php");
    exit;
  }



}else{
  header ("Location: index.php?error=0"); // GDYBYŚMY BEZ LOGOWANIA
// CHCIELI PRZEJŚĆ DO index.php TO header-PRZEKIERUJE DO ("Location: index.php?error=0")
  exit;
}

 ?>
