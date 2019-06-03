<?php
namespace Klasy;
//session_start();

use PDO;
use Klasy\Ustawienia;

class RejestracjaKlienta
{
     public function ekranRejestracji()
     {
       require './widoki/rejestracja.php';
     }

     public function rejestracja()
     {
       try{
         $dbc_h = new PDO(Ustawienia::get('dsn'), 'root', '') or die ("Nie udało sie połączyć z bazą");
      // $db = new PDO('mysql:host=localhost;dbname=nazwa_bazy', 'nazwa_uzytkownika', 'haslo_do_bazy');
          }
            catch (PDOException $e)
          {
            die ("Error connecting to database!");
          }

          if(isset($_POST['register']))
          {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashPassword = password_hash($password,PASSWORD_BCRYPT);

            $sth = $dbc_h->prepare('INSERT INTO user (email,password) VALUE (:email,:password)');
            $sth->bindValue(':email', $email, PDO::PARAM_STR);
            $sth->bindValue(':password', $hashPassword, PDO::PARAM_STR);
            $sth->execute();

            die('Rejestracja pomyslna!');
          }
     }



}
?>
