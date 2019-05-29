<?php
require 'vendor/autoload.php';
session_start();

if(isset($_POST['log_in'])){ // JEŻELI ZOSTAŁO WYSŁANE ['log_in'] // TO:

  $login = $_POST['login'];
  $haslo = $_POST['haslo'];

  if(
    empty($login) ||
    empty($haslo)){
    header("Location: index.php?error=1");
    exit;
  }
  $dbc_h = new PDO('mysql:dbname=korepetycje2019;hostname=localhost', 'root', '') or die ("Nie udało sie połączyć z bazą");
  $query = "SELECT * FROM klienci WHERE login = '$login' AND haslo = '$haslo'";
  $stmt = ($dbc_h->query($query));
  d($query, $stmt->fetchAll(PDO::FETCH_ASSOC));



  if($login != $rows['login']) {
    // header("Location: index.php?error=2");
    exit;
  }

  if($haslo != $rows['haslo']) {
    // header("Location: index.php?error=3");
    exit;
  }

  if( ($login == $rows['$login']) && ($haslo == $rows['haslo']) ){
    $_SESSION['zalogowany'] = 1;
    // header("Location: zalogowany.php");
    exit;
  }



}else{
  // header ("Location: index.php?error=0"); // GDYBYŚMY BEZ LOGOWANIA
// CHCIELI PRZEJŚĆ DO index.php TO header-PRZEKIERUJE DO ("Location: index.php?error=0")
  exit;
}
