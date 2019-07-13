<?php
namespace Klasy;
/**
 * Ustawienia aplikacji
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
  public static function get(string $ustawienie) {
    if (isset(self::$ustawienia[$ustawienie])) {
      return self::$ustawienia[$ustawienie];
    }
    return null;
  }
}
