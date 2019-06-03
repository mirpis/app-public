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
  {
    $stmt = $this->pdo->query($sql);

    if (! $result = $stmt->execute($params)) {
      throw new \Exception("Błąd zapytania do bazy danych");
    }

    if (\strpos(\strtoupper($sql), 'SELECT')) {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } elseif (strpos(\strtoupper($sql), 'INSERT')) {
      return $this->pdo->lastInsertId();
    } else {
      return $result;
    }
  }
}
