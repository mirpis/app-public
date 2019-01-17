<?php
namespace Klasy;
use PDO;
/**
 *
 */
class Dostep
{
  public function ekranLogowania() {
    require './widoki/logowanie.html';
  }

  public function logowanie() {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $dbc_h = new PDO('mysql:dbname=korepetycje2019;hostname=localhost', 'root', '') or die ("Nie udało sie połączyć z bazą");
    $query = "SELECT * FROM klienci WHERE login = '$login' AND haslo = '$haslo'";
    $stmt = ($dbc_h->query($query));
    d($query, $stmt->fetchAll(PDO::FETCH_ASSOC));
  }
}
