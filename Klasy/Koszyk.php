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

      $koszyk = Sesja::get('koszyk');
      if (isset($koszyk) && in_array($id, $koszyk)) {
        // Produkt już jest w koszyku więc go nie dodajemy znowu
      } else {
        $koszyk[] = $id;
        Sesja::set('koszyk', $koszyk); // $_SESSION['koszyk'] = $koszyk;
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

      $query = "SELECT p.*, t.nazwa AS 'typ' FROM produkty p JOIN typ_produktu t ON p.typ_id = t.id";

      $db = (new Database())->connect()->query($query);

      $produkty = [];

      foreach ($db as $value) {
          $produkty[$value['id']] = $value;
      }

      require './widoki/koszyk.php';
  }
//
//   public function ekranZakupow()
//   {
//     require './widoki/koszyk.php';
//   }
//
//   public function zakupy()
//   {
//     function poczatek_sesji()
//   {
//     if (!isset($_SESSION['koszyk']))
//     {
//       $_SESSION['koszyk']=array('pizamy'=>array(),'koszule-nocne'=>array(),'koszule-ciazowe'=>array(),'szlafroki'=>array());
//     }
//   }
//
//   function do_koszyka($ksiazki)
//   {
//     if (!isset($_POST['do_koszyka'])) return;
//     if (count($_POST['towary'])===0) return;
//     $towary=$_POST['towary'];
//     foreach($towary as $towar)
//     {
//       $id=(int)(substr($towar,0,6));
//       $klucz_cena='cena'.$id;
//       $klucz_ilosc='ile'.$id;
//       if ($ksiazki)
//       {
//         $count=count($_SESSION['koszyk']['pizamy']);
//         $_SESSION['koszyk']['pizamy'][$count]['opis']=substr($towar,6);
//         $_SESSION['koszyk']['pizamy'][$count]['cena']=$_POST[$klucz_cena];
//         $_SESSION['koszyk']['pizamy'][$count]['ilosc']=$_POST[$klucz_ilosc];
//       }
//       else
//       {
//         $count=count($_SESSION['koszyk']['koszule-nocne']);
//         $_SESSION['koszyk']['koszule-nocne'][$count]['opis']=substr($towar,6);
//         $_SESSION['koszyk']['koszule-nocne'][$count]['cena']=$_POST[$klucz_cena];
//         $_SESSION['koszyk']['koszule-nocne'][$count]['ilosc']=$_POST[$klucz_ilosc];
//       }
//     }
//   }
//
//   function pusty_koszyk()
//   {
//     if (!isset($_POST['pusty_koszyk'])) return;
//     $_SESSION['koszyk']['pizamy']=array();
//     $_SESSION['koszyk']['koszule-nocne']=array();
//     $_SESSION['koszyk']['koszule-ciazowe']=array();
//     $_SESSION['koszyk']['szlafroki']=array();
//     echo '<br />Koszyk jest pusty!';
//   }
//
//   function pokaz_koszyk()
//   {
//     if (!isset($_POST['pokaz_koszyk'])) return;
//     $pizamy=$_SESSION['koszyk']['pizamy'];
//     $koszule-nocne=$_SESSION['koszyk']['koszule-nocne'];
//     $koszule-ciazowe=$_SESSION['koszyk']['koszule-ciazowe'];
//     $szlafroki=$_SESSION['koszyk']['szlafroki'];
//
//     echo '<br />';
//     if (count($pizamy)===0 && count($koszule-nocne)===0 && count($koszule-ciazowe)===0 && count($szlafroki)===0)
//     {
//       echo 'Koszyk jest pusty!';
//       return;
//     }
//
//     $suma=0;
//     if (count($pizamy)>0)
//     {
//       echo 'Piżamy:<br />';
//       for($k=0;$k<count($pizamy);$k++)
//       {
//         $suma+=$pizamy[$k]['cena']*$pizamy[$k]['ilosc'];
//         echo ($k+1).'. '.$pizamy[$k]['opis'].', cena: '
//             .$pizamy[$k]['cena'].', ilość: '.$pizamy[$k]['ilosc'].'<br />'."\n";
//       }
//     }
//
//     if (count($koszule-nocne)>0)
//     {
//       echo '<br />Koszule-nocne:<br />';
//       for($k=0;$k<count($koszule-nocne);$k++)
//       {
//         $suma+=$koszule-nocne[$k]['cena']*$koszule-nocne[$k]['ilosc'];
//         echo ($k+1).'. '.$koszule-nocne[$k]['opis'].
//             ', cena: '.$koszule-nocne[$k]['cena'].', ilość: '.$koszule-nocne[$k]['ilosc'].'<br />'."\n";
//       }
//     }
//
//     if (count($koszule-ciazowe)>0)
//     {
//       echo '<br />Koszule-nocne:<br />';
//       for($k=0;$k<count($koszule-ciazowe);$k++)
//       {
//         $suma+=$koszule-ciazowe[$k]['cena']*$koszule-ciazowe[$k]['ilosc'];
//         echo ($k+1).'. '.$koszule-ciazowe[$k]['opis'].
//             ', cena: '.$koszule-ciazowe[$k]['cena'].', ilość: '.$koszule-ciazowe[$k]['ilosc'].'<br />'."\n";
//       }
//     }
//
//     if (count($szlafroki)>0)
//     {
//       echo '<br />Koszule-nocne:<br />';
//       for($k=0;$k<count($szlafroki);$k++)
//       {
//         $suma+=$szlafroki[$k]['cena']*$szlafroki[$k]['ilosc'];
//         echo ($k+1).'. '.$szlafroki[$k]['opis'].
//             ', cena: '.$szlafroki[$k]['cena'].', ilość: '.$szlafroki[$k]['ilosc'].'<br />'."\n";
//       }
//     }
//     echo '<br />Wartość towarów w koszyku: '.$suma;
//   }
//
//
//   }
}


 ?>
