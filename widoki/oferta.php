<?php
include './widoki/glowny.php';
//include './widoki/menu-gora.php';
?>

<div class="d-flex flex-row flex-wrap">
  <!-- Nagłówek -->
  <div class="col-md-12 bg-danger">
    <?php
      include './widoki/navbar.php';
     ?>
  </div>

  <!-- Menu -->
  <div class="col-md-3">
    <?php
      include './widoki/menu-boczne.php';
     ?>
  </div>

  <!-- Zdjęcia -->
  <div class="col-md-9 d-flex flex-row flex-wrap">
    <!-- flex-row - WYŚWIETLAJ W WIERSZU -->
    <!-- flex-wrap - ZŁAM WIERSZ I PRZENIEŚ KOLEJNE ZDJĘCIA DO KOLEJNEGO WIERSZA-->
    <?php foreach ($produkty as $produkt)
    {?>
      <div class="col-md-3 p-1 mt-3 text-dark">
        <div class="card h-100">
          <img class="card-img-top" src="http://localhost/app/img/<?php echo $produkt['link'] ?>.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title"><?php echo $produkt['tytul'] ?></h4>
            <?php if (isset($_SESSION['id'])) {
              ?><h4><?php echo $produkt['cena'] ?> zł</h4>
            <a href="#" class="btn btn-outline-primary">
              <i class="fas fa-shopping-basket"></i>
              Dodaj do koszyka
            </a><?php
          }
          ?>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>


<?php
include './widoki/stopka.php';
?>
