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
    // Tu należy wykorzystac plik ustawien, aby zamiast tekstu podawac indeksy z ustawien, np. Ustawienia::get('appName')
    $dbc_h = new PDO('mysql:dbname=korepetycje2019;hostname=localhost', 'root', '') or die ("Nie udało sie połączyć z bazą");
    $query = "SELECT * FROM klienci WHERE login = '$login' AND haslo = '$haslo'";
    $stmt = ($dbc_h->query($query));
    // Tu wykonac sprawdzenie czy fetchAll zwraca dane z bazy jednego uzytkownika - jeśli tak, należy wykorzystac klasę Sesja i ustawic w sesji zmienne związane z użytkownikem
    d($query, $stmt->fetchAll(PDO::FETCH_ASSOC));
  }
}
