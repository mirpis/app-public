<?php
namespace Klasy;

define('APP_URL', Ustawienia::get('appURL')); // define() - definiuje STAŁĄ
/**
 *
 */
class Glowna
{

    function __construct()
    {
      Sesja::getInstance();

      $kontroler = "\\Klasy\\".$_GET['klasa'];
      // new \PDO(Ustawienia::get('dsn'), 'root', '');
      $akcja = $_GET['funkcja']; // w htacces np: funkcja=logowanie

      $obiekt = new $kontroler(); // wielofunkcyjny
      // $obiekt = new $kontroler(); // new \Klasy\Dostep();,new \Klasy\Start();

      $obiekt->$akcja();// $akcja() to to co w : $_GET['funkcja'];
      // w htacces : klasa=KlientZalogowany&funkcja=powitanie

      // CZYLI:
      //             na $obiekt-cie = new $kontroler() - (dowolnej klasy)
      //             np: Klasy "KlientZalogowany"
      //             -> wywołujemy
      //             $akcja-cję - funkcję"powitanie"

      d($_SESSION);
     }
}
