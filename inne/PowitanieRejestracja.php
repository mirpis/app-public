<?php
namespace Klasy;

/**
 *
 */
class PowitanieRejestracja
{
  public function powitanie()
  {
    if (!isset($_SESSION['udanarejestracja']))
  	{
  		header('Location: ' . Ustawienia::get('appURL') . 'zarejestruj');
  		exit();
  	}
  	else
  	{
  		unset($_SESSION['udanarejestracja']);
  	}

  	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
  	if (isset($_SESSION['fr_login'])) unset($_SESSION['fr_login']);
  	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
  	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
  	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
  	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);

  	//Usuwanie błędów rejestracji
  	if (isset($_SESSION['e_login'])) unset($_SESSION['e_login']);
  	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
  	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
  	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
  	if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);

    require './widoki/powitanie-rejestracja.php';
  }

}

?>
