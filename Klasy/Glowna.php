<?php
namespace Klasy;

define('APP_URL', Ustawienia::get('appURL'));
/**
 *
 */
class Glowna
{
     $k = new Koszyk();
     $k->
    function __construct()
    {
      Sesja::getInstance();

      $kontroler = "\\Klasy\\".$_GET['klasa'];
      // new \PDO(Ustawienia::get('dsn'), 'root', '');
      $akcja = $_GET['funkcja'];
      $obiekt = new $kontroler(); // wielofunkcyjny
      // $obiekt = new $kontroler(); // new \Klasy\Dostep();,new \Klasy\Start();
      $obiekt->$akcja();
     }
}
?>
