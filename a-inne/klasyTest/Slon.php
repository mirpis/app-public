<?php
class Slon

{
    private $imie;

    public function ustawImie($dane){
      $this->imie = $dane;
    }

    public function podajImie(){
      return $this->imie;
    }

    public function przedstawSie(){
      return 'mam na imie'.'-'.$this->podajImie();
    }
};

$dumbo = new Slon;

$dumbo->ustawImie('dumbo');

echo $dumbo->przedstawSie();


?>
