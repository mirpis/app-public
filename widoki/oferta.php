<?php
include './widoki/glowny.php';
?>
<!--Przypisanie elementów wyrównania w pionie:
.align-baseline, .align-top, .align-middle, .align-bottom,
.align-text-bottom, .align-text-top
Uwaga: zadziała tylko dla elementów mających ustawiony
display: inline, inline-block, inline-table lub komórek tabeli -->

<nav class="navbar navbar-expand-lg navbar-dark bg-danger py-3 sticky-top">
<!-- navbar-expand-lg - NA EKRANIE O ROZDZIELCZOŚCI: lg  I WIĘKSZYM NASPĘPUJE expand(ROZSZERZENIE)
paska nawigacyjnego DO POSTACI "POZIOMEJ" I NAPISY USTAWIAJA SIĘ OBOK SIEBIE I ZNIKA: navbar-toggler-icon-->

<!-- navbar-collapse - NA EKRANIE O MNIEJSZEJ ROZDZIELCZOŚCI OD: lg  NASPĘPUJE collapse(ZAPADNIĘCIE)
paska nawigacyjnego DO POSTACI "PIONOWEJ" I NAPISY ZNIKAJĄ A POJAWIA SIĘ: navbar-toggler-icon -->
  <a class="navbar-brand" href="#offer">
    <i class="fas fa-tshirt"></i>
    Sklep
  </a>
<!-- navbar-toggler-icon - IKONKA "3 POZIOME KRESKI" PRAWY GÓRNY RÓG STRONY-ROZWIJANE MENU-->
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<!--data-toggle="collapse" UMORZLIWIA ROZWINIĘCIE SIĘ: (collapse-ZAPADNIĘTEGO/ZWĘŻONEGO) MENU  -->
<!--data-target= GDZIE W DOKUMENCIE JEST TO CO ULEGNIE "collapse" to: id="navbarNavAltMarkup
 TUTAJ: #navbarNavAltMarkup  POPRZEDZONE "#" KTÓRY OZNACZA "id" -->
<!--aria-controls="navbarNavAltMarkup" - POŁĄCZENIE POMIĘDZY TYM: button A <div class="collapse...id="navbarNavAltMarkup"> KTÓRY ZAWIERA TREŚĆ ULEGAJĄCĄ: collapse(ZAPADNIĘCIU-ZWĘŻENIU) -->
<!--aria-expanded="false" - "w małej ROZDZIELCZOŚCI" TREŚĆ ULEGAJĄCĄ: "collapse" DOMYŚLNIE JEST "ZWINIĘTA": "false" I DOPIERO KIEDY KLIKNIEMY NA: "toggler-icon"(IKONKA "3 POZIOME KRESKI") ROZWIJA SIĘ i jest: "true"   -->
<!--aria-label= ETYKIETA TEGO "batton" DLA NASZEGO CZYTNIKA: TUTAJ TO: "Toggle navigation"    -->
    <span class="navbar-toggler-icon"></span>
<!--<span> - tworzymy po to, aby zdefiniować zasięg działania jakiejś klasy w CSS,definiuje iż
odtąd dotąd obowiązuje dany styl.Atrybutami znacznika <span> będą najczęściej class, albo ewentualnie <style>-->
 </button>

 <!--ATRYBUT: d- display
 d-wartośc (dla rozmiaru od extra small)
 d-rozmiar-wartość (dla rozmiaru od ustawionego)
   rozmiar: sm, md, lg, xl
  wartość: none, inline, inline-block, block, table, table-cell, table-row, flex, inline-flex -->

<!-- ODSTEPY: m,p ( m = margin, p = padding) np: mr-1 (to: margin right o wielkości 1)
 np: mr-sm-1 (to: margin right od rozmiaru "small przez md,lg,xl" o wielkości 1)
  kierunek: t,b,l,r,x,y,blank
( top, bottom, left ,right, x = left + right, y = top + bottom, blank = z wszystkich stron)
wielkość: 0,1,2,3,4,5,auto  -->

 <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">

     <div class="navbar-nav mr=auto">

       <li class="nav-item">
         <a class="nav-link" href="#">Start</a>
       </li>
       <li class="nav-item dropdown"><!-- dropdown - ROZWIJANE W DÓŁ MENU-->
          <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" -->
         <a class="nav-link dropdown-toggle" href="#" role="button" id="submenu" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" >Kolekcje na wszystkie pory roku</a>
  <!--data-toggle="dropdown" UMORZLIWIA ROZWINIĘCIE SIĘ W DÓŁ: "dropdown" CZYLI:  SUB MENU  -->
  <!--role="button" CZYLI JAKĄ ROLĘ PEŁNI TEN LINK / MA ZACHOWYWAĆ SIĘ JAK PRZYCISK "button"  -->
  <!--aria-haspopup="true" CZY POSIADA haspopup CZYLI WYSKAKUJĄCĄ TREŚĆ / DOMYŚLNIE  "true"  -->
            <div class="dropdown-menu" aria-labelledby="submenu">
  <!--aria-labelledby=  OPISANY / ETYKIETOWANY PRZEZ  -->
                <a class="dropdown-item" href="#"> Wiosna </a>
                <a class="dropdown-item" href="#"> Lato </a>

                <div class="drobdown-divider">--------------------</div>

                <a class="drobdown-item" href="#"> Jesień </a>
                <a class="dropdown-item" href="#"> Zima </a>
            </div>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Kontakt</a>
         </li>
         <li class="nav-item">
            <a class= "nav-link" href="#">O nas</a>
         </li>

            <form class="form-inline">
<!--class="form-inline"  BO PRZEBYWA W "BELCE" POZIOMEGO MENU-->
               <input class="form-control" type="search" placeholder="Wyszukaj"
               aria-label="Wyszukaj">
               <button class="btn btn-light" type="submit">Znajdź</button>

            </form>
     </div>


     <div class="navbar-nav">
      <?php
        if (isset($_SESSION['id'])) {
        ?>
         <a class="nav-item nav-link">Witaj <?php echo $_SESSION['id']; ?></a>
         <a class="nav-item nav-link" href="http://localhost/app/wyloguj">Wyloguj</a>
        <?php
        } else {
        ?>
          <a class="nav-item nav-link" href="http://localhost/app/zaloguj">Zaloguj</a>
          <a class="nav-item nav-link" href="http://localhost/app/rejestracja">Rejestracja</a>
        <?php
        }
      ?>

     </div>
  </div>
</nav>

<div class="bg-light">
  <div class="d-flex flex-column justify-content-center align-items-center img-jumbotron">
    <h1 class="text-light">Witaj!</h1>
    <a href="#offer" class="btn btn-lg btn-outline-primary text-light py-2 px-4" style="border:2px solid;">Pokaż ofertę</a>
  </div>

  <div class="nav-left px-2 py-4">
      <nav class="nav flex-column">
            <div class="row">
                <!-- <div class="cat-bottom"></div> -->
              <div class="subcat" style="clear:both;">
                 <div>
                  <a href="" class="nav-link active text-dark font-weight-bold">
                  TWÓJ WYBÓR
                  </a>
                 </div>
                  <div>
                    <a href="" class="nav-link active">
                      piżamy
                    </a>
                  </div>
                  <div>
                    <a href="" class="nav-link active">
                      koszule nocne
                    </a>
                  </div>
                  <div>
                    <a href="" class="nav-link active">
                      koszulki satynowe
                    </a>
                  </div>

                  <div>
                    <a href="" class="nav-link active">
                      szlafroki
                    </a>
                  </div>
              </div>
            </div>
    </nav>
  </div>

  <div class="w-100 mt-5 pt-5 text-dark d-flex justify-content-center" id="offer">
    <div class="col-sm-6">
      <div class="row">
        <?php foreach ($produkty as $produkt)
        {?>
          <div class="card p-1 col-md-4">
            <img class="card-img-top" src="img/<?php echo $produkt['link'] ?>.jpg" alt="Card image">
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
        <?php } ?>

      </div>
      </div>
  </div>
</div>

<?php
include './widoki/stopka.php';
?>
