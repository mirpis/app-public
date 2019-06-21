<?php
/**
 *
 *
 */
try
{
   $dbc_h = new PDO(Ustawienia::get('dsn'), 'root', '') or die ("Nie udało sie połączyć z bazą");
}

catch (PDOException $e)
 {
  die ("Error connecting to database!");
 }
?>
