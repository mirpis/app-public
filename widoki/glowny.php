<!DOCTYPE html>
<html lang="pl" dir="ltr" style="scroll-behavior: smooth;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <!-- content="width=device-width - SZEROKOŚ DOSTĘPNEGO MIEJSCA
    ZOSTANIE USTAWIONA ZALEŻNIE OD SZEROKOŚCI URZĄDZENIA  -->

    <!-- initial-scale=1 - CZYLI BEZ ŻADNYCH ZOOMÓW ANI ODDALEŃ  -->

    <!-- shrink-to-fit=no - WYŁANCZAMY MECHANIZM: "ZMNIEJSZ SIĘ ABY SIĘ DOPASOWAĆ""
  BO MOŻE ZAKŁÓCIĆ RESPONSYWNOŚĆ-->

    <title>Sklep z piżamami</title>
    <meta name="description" content="Strona ze wszystkim co potrzebne do spania i chodzenia po domu">
    <meta name="keywords" content="Piżamy, szlafroki, koszule mocne">
    <meta name="author" content="Mirosław Pisula">
    <meta http-equiv="X-Ua-Compatible" content="IE-edge">

    <link rel="stylesheet" href="<?php echo APP_URL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">



  </head>
  <body>
  <!-- 100vh - PROCENTOWA WYSOKOŚC STRONY / CAŁA WYSOKOŚĆ
       100vw - PROCENTOWA SZEROKOŚĆ STRONY / CAŁA SZEROKOŚĆ -->
       <?php
       if (isset($_SESSION['sukces'])) {
         foreach ($_SESSION['sukces'] as $wiadomosc) {
           ?>
           <div class="alert alert-success alert-dismissible fade show" role="alert">
             <?php echo $wiadomosc ?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <?php
         }
       }
       if (isset($_SESSION['blad'])) {
         foreach ($_SESSION['blad'] as $wiadomosc) {
           ?>
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
             <?php echo $wiadomosc ?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <?php
         }
       }
       if (isset($_SESSION['uwaga'])) {
         foreach ($_SESSION['uwaga'] as $wiadomosc) {
           ?>
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <?php echo $wiadomosc ?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <?php
         }
       }
       unset($_SESSION['sukces']);
       unset($_SESSION['blad']);
       unset($_SESSION['uwaga']);
        ?>
