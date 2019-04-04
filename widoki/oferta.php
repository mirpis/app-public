<?php
include './glowny.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 sticky-top">
  <a class="navbar-brand">
    <i class="fas fa-tshirt"></i>
    Sklep
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Start</a>
      <a class="nav-item nav-link" href="#">Kontakt</a>
      <a class="nav-item nav-link" href="#">O nas</a>
    </div>

    <div class="navbar-nav float-right">
      <a class="nav-item nav-link" href="#">Login</a>
      <a class="nav-item nav-link" href="#">Rejestracja</a>
    </div>
  </div>
</nav>

<div class="bg-light">
  <div class="d-flex flex-column justify-content-center align-items-center img-jumbotron">
    <h1 class="text-light">Witaj!</h1>
    <a href="#offer" class="btn btn-lg btn-outline-primary text-light py-2 px-4" style="border:2px solid;">Pokaż ofertę</a>
  </div>

  <div class="w-100 mt-5 pt-5 text-dark d-flex justify-content-center" id="offer">
    <div class="col-md-9">
      <div class="row">
        <div class="card m-2" style="width:30%;">
          <img class="card-img-top" src="img/koszula-nocna.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Koszula nocna</h4>
            <a href="#" class="btn btn-outline-primary">
              <i class="fas fa-shopping-basket"></i>
              Dodaj do koszyka
            </a>
          </div>
        </div>

        <div class="card m-2" style="width:30%;">
          <img class="card-img-top" src="img/koszula-nocna-dluga.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Koszula nocna</h4>
            <a href="#" class="btn btn-outline-primary">
              <i class="fas fa-shopping-basket"></i>
              Dodaj do koszyka
            </a>
          </div>
        </div>

        <div class="card m-2" style="width:30%;">
          <img class="card-img-top" src="img/koszula-nocna-grochy.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Koszula nocna</h4>
            <a href="#" class="btn btn-outline-primary">
              <i class="fas fa-shopping-basket"></i>
              Dodaj do koszyka
            </a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card m-2" style="width:30%;">
          <img class="card-img-top" src="img/koszula-nocna-siatka.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Koszula nocna</h4>
            <a href="#" class="btn btn-outline-primary">
              <i class="fas fa-shopping-basket"></i>
              Dodaj do koszyka
            </a>
          </div>
        </div>

        <div class="card m-2" style="width:30%;">
          <img class="card-img-top" src="img/koszula-nocna-myszka-minnie.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Koszula nocna</h4>
            <a href="#" class="btn btn-outline-primary">
              <i class="fas fa-shopping-basket"></i>
              Dodaj do koszyka
            </a>
          </div>
        </div>
      </div>
      </div>
  </div>
</div>

<?php
include './stopka.php';
?>
