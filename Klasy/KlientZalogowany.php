<?php
namespace Klasy;

/**
 *
 */
class KlientZalogowany
{
  public function powitanie()
  {
    // echo "Gratulacje wlogowałeś się na konto: ".$_SESSION['id']."<br />";
    // echo "<a href='index.php?klasa=Dostep&funkcja=logowanie'>Wyloguj</a><br />";
    // echo "<a href='index.php?klasa=KlientZalogowany&funkcja=powitanie'>Odśwież</a><br />";

    //echo "<a href='zaloguj.php?akcja=wyloguj'>Wyloguj się</a><br />";
    require './widoki/oferta.php';
  }

}
?>
