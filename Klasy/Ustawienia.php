<?php
namespace Klasy
/**
 * Ustawienia aplikacji
 */
class Ustawienia
{
  private static $ustawienia = [
    // Tu ma się znaleź lista ustawień które aplikacja wykorzysta
    // Np. Ścieżka do aplikacji, dane dostępowe do bazy danych, itd.
    'appName' => "Korepetycje",
    'appDir' => '',
    'dbType' => 'mysql',
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
