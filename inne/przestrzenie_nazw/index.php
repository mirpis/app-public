<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="utf-8">
        <title>przestrzenie nazw</title>

</head>
<body>
  <?php
  require_once("Customer.php");

  class Customer
  {
    public $id = 50;
  }
   $c = new \nazwaPrzestrzeni2\Customer();

   echo $c->nazwa;



   ?>


</body>
</html>
