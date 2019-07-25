<?php include './widoki/glowny.php';
//poczatek_sesji();
?>
<div class="container d-flex justify-content-center flex-column mt-5
             p-5 col-md-8 border rounded">

    <h1>Zakupy on-line</h1>
    <div class="d-flex flex-column">
        <div class="naglowki d-flex flex-row">
          <p class="col-md-3">Typ</p>
          <p class="col-md-3">Produkt</p>
          <p class="col-md-2">Cena</p>
          <p class="col-md-2"></p>
          <p class="col-md-2"></p>
        </div>
      <?php foreach ($koszyk as $k) {// $k - id produktu z koszyka ?>
        <div class="produkt d-flex flex-row">
          <p class="col-md-3"><?php echo $produkty[$k]['typ'] ?></p>
          <p class="col-md-3"><?php echo $produkty[$k]['tytul'] ?></p>
          <p class="col-md-2"><?php echo $produkty[$k]['cena'] ?>zł</p>
          <p class="col-md-3"><img src="<?php echo APP_URL . 'img/' .
                                    $produkty[$k]['link'] ?>" width="90px"></p>
          <a class="col-md-1 btn btn-warning btn h-25 d-inline-block" style="width: 120px;" href="<?php
                              echo APP_URL . 'usun-z-koszyka/' . $k ?>">Usuń</a>
        </div>
      <?php } ?>
    </div>
    <!-- <p><a href="<?php echo APP_URL ?>pizamy/">Piżamy</a></p>
    <p><a href="<?php echo APP_URL ?>koszule-nocne/">Koszule nocne</a></p>
    <p><a href="<?php echo APP_URL ?>koszule-ciazowe/">Koszule ciążowe</a></p>
    <p><a href="<?php echo APP_URL ?>szlafroki/">Szlafroki</a></p>
    <br />
    <form action="sklep.php" method="post">
      <input type="submit" name="pusty_koszyk"  value="Pusty koszyk" />
      <input type="submit" name="pokaz_koszyk"  value="Pokaż koszyk" />
    </form>
    <?php
      pusty_koszyk();
      pokaz_koszyk();
    ?> -->
</div>
