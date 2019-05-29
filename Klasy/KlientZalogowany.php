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
      ['link' => 'koszula-ciążowa-do-karmienia', 'tytul' => 'koszula-ciążowa-do-karmienia', 'cena' => '67', 'typ' => 'koszula-ciążowa'],

      ['link' => 'koszula-nocna', 'tytul' => 'koszula-nocna', 'cena' => '57', 'typ' => 'koszula-nocna'],
      ['link' => 'koszula-nocna-długa', 'tytul' => 'koszula-nocna-długa', 'cena' => '57', 'typ' => 'koszula-nocna'],
      ['link' => 'koszula-nocna-grochy', 'tytul' => 'koszula-nocna-grochy', 'cena' => '57', 'typ' => 'koszula-nocna'],
      ['link' => 'koszula-nocna-myszka', 'tytul' => 'koszula-nocna-myszka', 'cena' => '57', 'typ' => 'koszula-nocna'],
      ['link' => 'koszula-nocna-odkryte-ramiona', 'tytul' => 'koszula-nocna-odkryte-ramiona', 'cena' => '57', 'typ' => 'koszula-nocna'],
      ['link' => 'koszula-nocna-siatka', 'tytul' => 'koszula-nocna-siatka', 'cena' => '57', 'typ' => 'koszula-nocna'],

      ['link' => 'piżama', 'tytul' => 'piżama', 'cena' => '65', 'typ' => 'piżama'],
      ['link' => 'piżama-ze-spodniami-3-4', 'tytul' => 'piżama-ze-spodniami-3-4', 'cena' => '65', 'typ' => 'piżama'],
      ['link' => 'piżama-z-krótkimi-spodenkami', 'tytul' => 'piżama-z-krótkimi-spodenkami', 'cena' => '65', 'typ' => 'piżama'],
      ['link' => 'piżama-z-krótkimi-spodenkami-grochy', 'tytul' => 'piżama-z-krótkimi-spodenkami-grochy', 'cena' => '65', 'typ' => 'piżama'],
      ['link' => 'piżama-z-legginsami-3-4', 'tytul' => 'piżama-z-legginsami-3-4', 'cena' => '65', 'typ' => 'piżama'],

      ['link' => 'szlafrok-z-dzianiny-shirtowej', 'tytul' => 'szlafrok-z-dzianiny-shirtowej', 'cena' => '65', 'typ' => 'szlafrok'],
    ];

    if (isset($_GET['kategoria']))
    {
      foreach ($produkty as $klucz => $produkt)
       {
        if ($produkt['typ'] != $_GET['kategoria'])
         {
          unset($produkty[$klucz]);

        }
      }
    }

    require './widoki/oferta.php';
  }

}

?>
