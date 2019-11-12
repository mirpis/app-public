<?php
namespace Klasy;
use PDO;
use Config\Ustawienia;
use Klasy\Sesja;
use Config\Database;
/**
*
*/
  // TODO: zapisz informacje o zamówieniu do Bazy DANYCH
  $stmt = $pdo->prepare("INSERT INTO zamowionekienci (id, nazwa klienta, adres) VALUES (null, :nazwa klienta, :adres)");
  $stmt->bindValue(':nazwa klienta', $_POST['nazwa klienta'], PDO::PARAM_STR);
  $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
  $stmt->bindValue(':adres', $_POST['adres'], PDO::PARAM_STR);




  // TODO: wyśli maila potiwerdzającego
?>
