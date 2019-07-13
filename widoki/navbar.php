

  <div class="col-md-12 row justify-content-md-center">
    <div class="d-flex flex-column justify-content-center">
      <h1 class="app-title">SABA</h1>
        <h5 class="d-flex justify-content-center">SKLEP Z PIŻAMAMI</h5>
    </div>
  </div>

 <nav class="navbar navbar-expand-lg navbar-dark bg-danger py-3 sticky-top">
  <a class="navbar-brand" href="#offer">
    <i class="fas fa-tshirt"></i>
    Sklep
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto d-flex justify-content-around">
      <li class="nav-item">
        <a class="nav-link" href="#">Start</a>
      </li>

      <li class="nav-item dropdown"><!-- dropdown - ROZWIJANE W DÓŁ MENU-->

          <a class="nav-link dropdown-toggle" href="#" role="button" id="submenu" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" >Kolekcje na wszystkie pory roku</a>
               <!--data-toggle="dropdown" UMORZLIWIA ROZWINIĘCIE SIĘ W DÓŁ: "submenu"  -->
               <!--role="button" CZYLI JAKĄ ROLĘ PEŁNI TEN LINK / MA ZACHOWYWAĆ SIĘ JAK PRZYCISK "button"  -->
               <!--aria-haspopup="true" CZY POSIADA haspopup CZYLI WYSKAKUJĄCĄ TREŚĆ / DOMYŚLNIE  "true"  -->
       <div class="dropdown-menu" aria-labelledby="submenu">
         <!--aria-labelledby=  OPISANY / ETYKIETOWANY PRZEZ  -->
         <a class="dropdown-item" href="#"> Wiosna </a>
         <a class="dropdown-item" href="#"> Lato </a>

           <div class="dropdown-divider"></div>

         <a class="dropdown-item" href="#"> Jesień </a>
         <a class="dropdown-item" href="#"> Zima </a>
       </div>
      </li>

      <li class="nav-item">
         <a class="nav-link" href="#">Kontakt</a>
      </li>

      <li class="nav-item">
         <a class= "nav-link" href="#">O nas</a>
      </li>
    </ul>

    <div class="d-flex flex-row">
      <form class="form-inline">
          <!--class="form-inline"  BO PRZEBYWA W "BELCE" POZIOMEGO MENU-->
         <input class="form-control" type="search" placeholder="Wyszukaj"
         aria-label="Wyszukaj">
         <button class="btn btn-light" type="submit">Znajdź</button>
      </form>

      <ul class="navbar-nav mr-auto">
        <?php
          if (isset($_SESSION['id'])) {
          ?>
           <a class="nav-item nav-link">Witaj <?php echo $_SESSION['id']; ?></a>
           <a class="nav-item nav-link" href="<?php echo APP_URL ?>wyloguj">Wyloguj</a>
           <a class="navbar-brand" href="<?php echo APP_URL ?>koszyk">
           <i class="fas fa-shopping-cart"></i>
           </a>
          <?php
          } else {
          ?>
            <a class="nav-item nav-link" href="<?php echo APP_URL ?>zaloguj">Zaloguj</a>
            <a class="nav-item nav-link" href="<?php echo APP_URL ?>zarejestruj">Rejestracja</a>
          <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
