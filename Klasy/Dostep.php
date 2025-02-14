<?php
namespace Klasy;
use PDO;
use Config\Ustawienia;
use Config\Database;
/**
 *
 */
class Dostep
{
   public function ekranLogowania()
   {
      require './widoki/logowanie.php';
    }

    public function logowanie()
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        // Tu należy wykorzystac plik ustawien, aby zamiast tekstu podawac indeksy z ustawien, np. Ustawienia::get('appName')
        $dbc_h = new Database();
        $dbc_h->connect();
        $query = "SELECT * FROM klienci WHERE login = '$login' AND haslo = '$haslo'";
        $dane = ($dbc_h->query($query));
        // Tu wykonac sprawdzenie czy fetchAll zwraca dane z bazy jednego uzytkownika -
        // jeśli tak, należy wykorzystac klasę Sesja i ustawic w sesji zmienne związane z użytkownikem
        // fetchall - przechwyć wszysto
        // $dane = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($dane) === 1)
        { // JEZELI W BAZIE JEST JEDNA OSOBA Z PODANYM LOGINEM I HASŁEM
          $id_baza = $dane[0]['id']; // ZAWSZE O INEKSIE "ZER0"
          Sesja::set('id', $id_baza); // TO ROZPOCZNIJ: Sesja
    // dlaczego "id" a nie "login" i "hasło"
         header('Location: ' . Ustawienia::get('appURL') . 'home');
        }
         else
        {
          header('Location: ' . Ustawienia::get('appURL') . 'zaloguj');
        }
    }

        public function wylogowanie()
        {
              $_SESSION['zalogowany'] = 0;
              session_destroy();
              header('Location: ' . Ustawienia::get('appURL'));
              echo "Zostałeś pomyślnie wylogowany<br />";


         }

}
?>
