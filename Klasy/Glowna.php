<?php
namespace Klasy;
/**
 *
 */
class Glowna
{

  function __construct()
  {
    echo 'glowna klasa zadzialala';
    $kontroler = "\\Klasy\\".$_GET['klasa'];
    $akcja = $_GET['funkcja'];
    $obiekt = new $kontroler();
    $obiekt->$akcja();
  }
}
