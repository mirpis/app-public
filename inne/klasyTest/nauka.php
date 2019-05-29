<?php

class Imie{
  public $imie;

  function __construct($jakie)
  {
    $this->imie = $jakie;
  }
  function wypisz()
  {
    echo $this->imie.' <br />';
  }
}

$a = new Imie("Jan");
$b = new Imie("kasia");
$c = new Imie("Romam");

$a->wypisz();
$b->wypisz();
$c->wypisz();
echo var_dump($a);
?>
