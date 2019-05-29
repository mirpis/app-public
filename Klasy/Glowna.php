<?php
namespace Klasy;
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
      $akcja = $_GET['funkcja'];
      $obiekt = new $kontroler(); // wielofunkcyjny
      // $obiekt = new $kontroler(); // new \Klasy\Dostep();,new \Klasy\Start();
      $obiekt->$akcja();
    }
}
