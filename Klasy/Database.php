<?php
namespace Klasy;

use PDO;

/**
 * Klasa połaczenia z bazą danych
 */
class Database
{
  private $pdo;
  /**
   * Tworzy połączenie z bazą danych
   * @return self Zwraca cały obiekt do wykonywania dalszych funkcji
   */
  public function connect() : self
  {
    if (! $this->isConnected()) {
      $this->pdo = new PDO(
        Ustawienia::get('dsn'),
        'root',
        ''
      );
    }

    return $this;
  }
  /**
   * Zwraca informację czy jest połączenie z bazą danych
   * @return bool
   */
  public function isConnected() : bool
  {
    return (bool) $this->pdo;
  }
  /**
   * Wykonuje zapytanie i zwraca rezultat
   * @param  string $sql    Kod SQL do wykonania
   * @param  array  $params Parametry zapytania
   * @return
   */
  public function query(string $sql, array $params = [])
  // array $params = [] TO: VALUES (?, ?, ?) CZYLI NP: $p['email'], $p['login'], $p['haslo1']
  {
    // $stmt To Obiekt klasy PDOStatement
    $stmt = $this->pdo->prepare($sql);
    // execute wykonuje zapytanie wykorzystując podane parametry np. $params
    if (! $result = $stmt->execute($params)) {
      throw new \Exception("Błąd zapytania do bazy danych");
    }

    if (\strpos(\strtoupper($sql), 'SELECT') >= 0) {
    // strpos- szuka kawałka tekstu w większym tekscie , jeżeli nie znajdzie
  //   to zwraca -1
  //  >=0 - pozycja zero - na początku: SELECT `klienci`
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } elseif (strpos(\strtoupper($sql), 'INSERT') >= 0) {
      return $this->pdo->lastInsertId();
      // lastInsertId - POKAZUJE id OSTATNIEGO WSTAWIONEGO WIERSZA
    } else {
      return $result; // JEŻELI INNA KOMENDA TO INFORMACJA CZY POSZŁO CZY NIE POSZŁO.
    }
  }
}
