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
      if (Sesja::get('id') === null && $_GET['klasa'] !== 'Dostep')
      {
        header('Location: ' . Ustawienia::get('appURL') . 'zaloguj');
      }
      $kontroler = "\\Klasy\\".$_GET['klasa'];
      // new \PDO(Ustawienia::get('dsn'), 'root', '');
      $akcja = $_GET['funkcja'];
      $obiekt = new $kontroler(); // wielofunkcyjny
      // $obiekt = new $kontroler(); // new \Klasy\Dostep();,new \Klasy\Start();
      $obiekt->$akcja();
       d($obiekt);
    }
}
