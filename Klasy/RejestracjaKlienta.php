<?php
namespace Klasy;
//session_start();

use PDO;
use Klasy\Ustawienia;

class Rejestracja
{
   public function ekranRejestracji()
   {
     require './widoki/rejestracja.php';
   }

   public function Rejesrtacja()
   {
     try{
       $dbc_h = new PDO(Ustawienia::get('dsn'), 'root', '') or die ("Nie udało sie połączyć z bazą");
       // $db = new PDO('mysql:host=localhost;dbname=nazwa_bazy', 'nazwa_uzytkownika', 'haslo_do_bazy');
        }
          catch (PDOException $e)
        {
          die ("Error connecting to database!");
        }

     function filtruj($zmienna)
     {
         if(get_magic_quotes_gpc())
             $zmienna = stripslashes($zmienna); // usuwamy slashe

        // usuwamy spacje, tagi html oraz niebezpieczne znaki
         return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
     }

     if (isset($_POST['rejestruj']))
     {
        $login = filtruj($_POST['login']);
        $haslo1 = filtruj($_POST['haslo1']);
        $haslo2 = filtruj($_POST['haslo2']);
        $email = filtruj($_POST['email']);
        $ip = filtruj($_SERVER['REMOTE_ADDR']);

        // sprawdzamy czy login nie jest już w bazie
        if (mysql_num_rows(mysql_query("SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)
        {
           if ($haslo1 == $haslo2) // sprawdzamy czy hasła takie same
           {
              mysql_query("INSERT INTO `uzytkownicy` (`login`, `haslo`, `email`, `rejestracja`, `logowanie`, `ip`)
                 VALUES ('".$login."', '".md5($haslo1)."', '".$email."', '".time()."', '".time()."', '".$ip."');");

              echo "Konto zostało utworzone!";
           }
           else echo "Hasła nie są takie same";
        }
        else echo "Podany login jest już zajęty.";
     }

   }
}
?>
