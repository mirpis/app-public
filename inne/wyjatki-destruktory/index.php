<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="utf-8">
        <title>wyjątki i ich obsługa - destruktory</title>

</head>
<body>
  <?php
    require_once("FileRead.php");
    try
    {
        $reader = new FileRead("nazwapliku.txt");

        $reader->getWholeContent();
    }
    catch(Exception $e)
    {
      echo $e->getMessage();
    }

   ?>


</body>
</html>
