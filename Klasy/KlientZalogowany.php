<?php
namespace Klasy;

/**
 *
 */
class KlientZalogowany
{
  public function powitanie()
  {
    $produkty = [
      ['link' => 'koszula-nocna', 'tytul' => 'Koszula nocna', 'cena' => '15'],
      ['link' => 'koszula-nocna-dluga', 'tytul' => 'Koszula nocna długa', 'cena' => '25'],
      ['link' => 'koszula-nocna', 'tytul' => 'Koszula nocna', 'cena' => '15'],
      ['link' => 'koszula-nocna-dluga', 'tytul' => 'Koszula nocna długa', 'cena' => '25'],
      ['link' => 'koszula-nocna', 'tytul' => 'Koszula nocna', 'cena' => '15'],
      ['link' => 'koszula-nocna-dluga', 'tytul' => 'Koszula nocna długa', 'cena' => '25'],
    ];
    
    require './widoki/oferta.php';
  }

}
?>
