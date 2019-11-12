<?php include './widoki/glowny.php';
//poczatek_sesji();
?>
<div class="container d-flex justify-content-center flex-column mt-5
             p-5 col-md-8 border rounded">

    <div id="pjax-container" class="clearfix">

    </div>

   <a class="btn btn-outline-warning w-10 mt-3" href="<?php echo APP_URL ?>">Powrót do zakupów</a>
   <h1>Zakupy on-line</h1>
    <div class="d-flex flex-column">
        <div class="naglowki d-flex flex-row">
          <p class="col-md-3">Typ</p>
          <p class="col-md-3">Produkt</p>
          <p class="col-md-2">Cena</p>
          <p class="col-md-2"></p>
          <p class="col-md-2"></p>
        </div>

     <?php if(is_array($koszyk) || is_object($koszyk))  {?>

      <?php foreach ($koszyk as $k)
            {// $k - id produktu z koszyka - element koszyka ?>
        <div class="produkt d-flex flex-row">
          <p class="col-md-3"><?php echo $produkty[$k]['typ'] ?></p>
          <p class="col-md-3"><?php echo $produkty[$k]['tytul'] ?></p>
          <p class="col-md-2"><?php echo $produkty[$k]['cena'] ?>zł</p>
          <p class="col-md-3"><img src="<?php echo APP_URL . 'img/' .
            $produkty[$k]['link'] ?>" width="90px"></p>


          <a class="col-md-1 btn btn-warning btn h-25 d-inline-block"
            style="width: 120px;" href="<?php echo APP_URL . 'usun-z-koszyka/' . $k ?>">Usuń</a>

        </div>
       <?php } ?>
     <?php } ?>

    </div>

    <?php if(isset($koszyk) && count($koszyk) > 0){ ?>
    <p>Twój koszyk zawiera : <?php echo count($_SESSION['koszyk']);?> produkty.</p>
    <?php }?>


      <?php if(!isset($koszyk) || count($koszyk) == 0){ ?>
      <p>Twój koszyk jest pusty.</p>
      <?php }?>

    <a class="col-md-12 btn btn-warning btn-lg btn-block"
       href="<?php echo APP_URL . 'usun-wszystko-z-koszyka' ?>">Usuń wszystko z koszyka</a>

    <button class="btn btn-outline-light w-100" type="submit" name="button">
      <a href = 'zamowienie.php'>Złóż zamówienie</a></button>

</div>
