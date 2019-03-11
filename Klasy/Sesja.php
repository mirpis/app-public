<?php
namespace Klasy;
// Napisz klasę sesja która będzie miała STATYCZNE metody:
// rozpocznij - tu ma się znaleź metoda session_start - jest ona opisana w internecie a na pewno na stronie php.net

class Sesja
{
  const SESSION_STARTED = TRUE;
  const SESSION_NOT_STARTED = FALSE;

  private $sessionState = self::SESSION_NOT_STARTED;

  private static $instance;

  private function __construct()
  {

  }

  public static function getInstance()
  {
   if (!isset(self::$instance))
   {
     self::$instance = new self;

   }
     self::$instance->startSession();

     return self::$instance;
  }

  public function startSession()
  {
   if ($this->sessionState == self::SESSION_NOT_STARTED)
   {
     $this->sessionState = session_start();
   }
   return $this->sessionState;
  }

  // set - metoda ma dostac dwa parametry: $indeks, $wartosc; ma ona ustawic w tablicy $_SESSION pod danym indeksem podaną wartośc

  public static function set( $name , $value )
  {
    $_SESSION[$name] = $value;
  }

  // get - metoda ma jeden parametr: $indeks; ma zwrócic z tablicy $_SESSION wartosc spod tego indeksu

  public static function get( $name )
  {
    if (isset($_SESSION[$name]))
    {
      return $_SESSION[$name];
    }
  }

  // unset - metoda ma jeden parametr ($indeks) i wykorzystac wbudowaną metodę unset() do wyczyszczenia danych w tablicy $_SESSION spod tego indeksu

  public function __isset( $name )
  {
    return isset($_SESSION[$name]);
  }

  public function __unset( $name )
  {
     unset($_SESSION[$name]);
  }
}
