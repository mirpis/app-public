<?php
namespace Klasy;
use PDO;
use Klasy\Ustawienia;
use Klasy\Sesja;
use Klasy\Database;
/**
*
*/
class Koszyk
{
  /**
   * Dodanie produktu do koszyka.
   * @return void
   */
  public function dodaj()
  {
      $id = $_GET['id'];

     //unset($_SESSION['koszyk']); -  // czyści koszyk

      $koszyk = Sesja::get('koszyk');// d($koszyk);exit();
      //włóż do zmiennej $koszyk to co do tej pory było już w koszyku

      if (isset($koszyk) && in_array($id, $koszyk)) {
     // Jeżeli następny Produkt który chcemy dodać do koszyka
    // jest już w koszyku to go nie dodajemy znowu/nic nie robimy
      } else {
        $koszyk[] = $id; // Jeżeli nie jest w koszyku to go dodajemy

        Sesja::set('koszyk', $koszyk); // $_SESSION['koszyk'] = $koszyk;
    // Ponownie ustawiamy w $_SESSION koszyk z dodanym jednym produktem
      }

      header('Location: ' . Ustawienia::get('appURL') . 'home');
  }
  /**
   * [koszyk description]
   * @return [type] [description]
   */
  public function koszyk()
  {
      $koszyk = Sesja::get('koszyk');

      $query = "SELECT p.*, t.nazwa AS 'typ' FROM produkty p JOIN typ_produktu t ON p.typ = t.id";

      $db = (new Database())->connect()->query($query);

      //d($db);

      $produkty = [];

    // ponieważ tablica $db jest numerowana od 0,1,2..robimy PRZEINDEKSOWANIE
    // tym FOREACH tworzym dodatkową TABLICĘ $produkty[] numerowaną od 1,2,3..
    // żeby się numeracja 'id' produktów zgadzała z bazą danych
      foreach ($db as $value)
      {
          $produkty[$value['id']] = $value;
      }

       d($produkty, $db);

      require './widoki/koszyk.php';
   }

  public function usun()
  {
     $id = $_GET ['id'];

     // if(isset($koszyk) && in_array($id, $koszyk))
     //if(in_array($id, $koszyk))
     //if($_GET['action']=="usun")
     if(isset($_SESSION['koszyk'][$_GET['id']]))
     {
     unset($_SESSION['koszyk'][$_GET['id']]);
      //exit;
     }

      header('Location: ' . Ustawienia::get('appURL') . 'koszyk');
   }

   public function usunWszystko()
   {
     $id = $_GET ['id'];


     // if(isset($_SESSION['koszyk']))
      if(isset($_GET['usunWszystko']))
     {
       unset($_SESSION['koszyk']);

       exit();
      }
     header('Location: ' . Ustawienia::get('appURL') . 'koszyk');

   }

 //  public function pusty_koszyk()
 // {
 //    {
 //      if (!isset($_SESSION['koszyk']))
 //      {
 //        //unset($koszyk = array( ));
 //        unset($_SESSION['koszyk']);
 //
 //      }
 //
 //      echo '<br />Koszyk jest pusty!';
 //    }
 //      header('Location: ' . Ustawienia::get('appURL') . 'koszyk');
 //  }
 //
 //   public function pokaz_koszyk()
 //   {
 //     if (!isset($_POST['pokaz_koszyk'])) return;
 //     $pizamy=$_SESSION['koszyk']['pizamy'];
 //     $koszule_nocne=$_SESSION['koszyk']['koszule-nocne'];
 //     $koszule_ciazowe=$_SESSION['koszyk']['koszule-ciazowe'];
 //     $szlafroki=$_SESSION['koszyk']['szlafroki'];
 //
 //     echo '<br />';
 //     if (count($pizamy)===0 && count($koszule_nocne)===0 && count($koszule_ciazowe)===0 && count($szlafroki)===0)
 //     {
 //
 //       echo 'Koszyk jest pusty!';
 //       header('Location: ' . Ustawienia::get('appURL') . 'koszyk');
 //       return;
 //     }
 //   }

   // function pusty_koszyk()
   // {
   //   if (!isset($_POST['pusty_koszyk'])) return;
   //   $_SESSION['koszyk']['pizamy']=array();
   //   $_SESSION['koszyk']['koszule-nocne']=array();
   //   $_SESSION['koszyk']['koszule-ciazowe']=array();
   //   $_SESSION['koszyk']['szlafroki']=array();
   //   echo '<br />Koszyk jest pusty!';
   // }
  //
  // public function pokaz_koszyk()
  // {
  //   if (!isset($_POST['pokaz_koszyk'])) return;
  //   $pizamy=$_SESSION['koszyk']['pizamy'];
  //   $koszule_nocne=$_SESSION['koszyk']['koszule-nocne'];
  //   $koszule_ciazowe=$_SESSION['koszyk']['koszule-ciazowe'];
  //   $szlafroki=$_SESSION['koszyk']['szlafroki'];
  //
  //   echo '<br />';
  //   if (count($pizamy)===0 && count($koszule_nocne)===0 && count($koszule_ciazowe)===0 && count($szlafroki)===0)
  //   {
  //
  //     echo 'Koszyk jest pusty!';
  //     header('Location: ' . Ustawienia::get('appURL') . 'home');
  //     return;
  //   }
  // }
    // $suma=0;
  //   if (count($pizamy)>0)
  //   {
  //     echo 'Piżamy:<br />';
  //     for($k=0;$k<count($pizamy);$k++)
  //     {
  //       $suma+=$pizamy[$k]['cena']*$pizamy[$k]['ilosc'];
  //       echo ($k+1).'. '.$pizamy[$k]['opis'].', cena: '
  //           .$pizamy[$k]['cena'].', ilość: '.$pizamy[$k]['ilosc'].'<br />'."\n";
  //     }
  //   }
  //
  //   if (count($koszule-nocne)>0)
  //   {
  //     echo '<br />Koszule-nocne:<br />';
  //     for($k=0;$k<count($koszule-nocne);$k++)
  //     {
  //       $suma+=$koszule-nocne[$k]['cena']*$koszule-nocne[$k]['ilosc'];
  //       echo ($k+1).'. '.$koszule-nocne[$k]['opis'].
  //           ', cena: '.$koszule-nocne[$k]['cena'].', ilość: '.$koszule-nocne[$k]['ilosc'].'<br />'."\n";
  //     }
  //   }
  //
  //   if (count($koszule-ciazowe)>0)
  //   {
  //     echo '<br />Koszule-nocne:<br />';
  //     for($k=0;$k<count($koszule-ciazowe);$k++)
  //     {
  //       $suma+=$koszule-ciazowe[$k]['cena']*$koszule-ciazowe[$k]['ilosc'];
  //       echo ($k+1).'. '.$koszule-ciazowe[$k]['opis'].
  //           ', cena: '.$koszule-ciazowe[$k]['cena'].', ilość: '.$koszule-ciazowe[$k]['ilosc'].'<br />'."\n";
  //     }
  //   }
  //
  //   if (count($szlafroki)>0)
  //   {
  //     echo '<br />Koszule-nocne:<br />';
  //     for($k=0;$k<count($szlafroki);$k++)
  //     {
  //       $suma+=$szlafroki[$k]['cena']*$szlafroki[$k]['ilosc'];
  //       echo ($k+1).'. '.$szlafroki[$k]['opis'].
  //           ', cena: '.$szlafroki[$k]['cena'].', ilość: '.$szlafroki[$k]['ilosc'].'<br />'."\n";
  //     }
  //   }
  //   echo '<br />Wartość towarów w koszyku: '.$suma;
  //
  //
  // }

}
?>
