<?php
namespace Klasy;
/**
 * Ustawienia aplikacji
 */
/**
 * ZMIENNĄ const np: const USTAWIENIA    MOŻNA USTAWIĆ RAZ I KONIEC,
 * NIC NIE MOŻNA W NIEJ ZMIENIAĆ
 *
 * ZMIENNĄ static np: private static $ustawienia   MOŻNA ZMIENIAĆ,JEJ PARAMETRY,
 * I ISTNIEJE POMIMO ŻE NIE UTWOŻONO ŻADNEGO OBIEKTU
 */
class Ustawienia
{
  private static $ustawienia = [

    'appName' => "Korepetycje",
    'appDir' => '',
    'dbType' => 'mysql',
    'dbName' => 'korepetycje2019',
    'dsn' => 'mysql:dbname=korepetycje2019;hostname=localhost;charset=utf8',
    'appURL' => 'http://localhost/app/'
    // ..
  ];
  /**
   * Zwraca parametr z ustawień
   * @param  string $ustawienie Indeks w tablicy ustawień
   * @return mixed ustawienie
   */
  public static function get(string $ustawienie)
   {
    if (isset(self::$ustawienia[$ustawienie]))
     {
      return self::$ustawienia[$ustawienie];
/*
this-> używamy tylko wtedy gdy jest utworzony jakiś Obiekt
self - możemy użyć na rzecz Classy która nie ma utworzonego żadnego Obiektu
*/
     }
    return null;
  }
}
