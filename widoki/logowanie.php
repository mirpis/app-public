<?php include './widoki/glowny.php'; ?>

<h3>Zaloguj się</h3>
<form class="" action="zaloguj-sie" method="post">
  <input type="text" name="login" />
  <input type="password" name="haslo" />
  <input type="submit" value="Przeslij" />
</form>

<main>
  <section class="pizamy">

  <!-- <div class="container-fluid"> - (fluid - PŁYN)
  "LAYOUT STRONY" JEST NA TYLE PŁYNNY ŻE STRONA DOPASUJE SIĘ DO WIĘKSZEGO
   EKRANU NIŻ OBEJMUJE NAJWIĘKSZY "bootstrap-OWY ROZMIAR extra large" -->

  <!-- ŻEBY STWOŻYĆ RESPONSYWNĄ SIATKĘ:
   1. ZBIORCZY POJEMNIK: class="container" LUB "class=container-fluid"-->
    <div class="container">

        <header>
          <h1>Szeroki wybór piżam, szlafroków i koszul mocnych</h1>
          <p>Przedstawiamy szeroką gamę ubrań do spania</p>
        </header>

  <!-- ŻEBY STWOŻYĆ RESPONSYWNĄ SIATKĘ:
   1. ZBIORCZY POJEMNIK: class="container" LUB "class=container-fluid"
      2. W JEGO WNĘTRZU TWORZYMY WIERSZ SIATKI: class="row"  -->

      <div class="row"><!-- "row"- WIERSZ,SZEREG class="row"- OPAKOWUJE NAM
       PEWNĄ ZADANĄ (POD SOPEM) ILOŚĆ KOLUMN [JEST TO tzw."WRAPPER" DLA TYCH KOLUMN
       CZYLI 'OBWOLUTA, OPAKOWANIE' KTÓTA POZWALA ZGRUPOWAĆ KILKA KOLUMN
       W RAMY JEDNEGO WIERSZA "row" SIATKI>  -->

   <!--<div class="row no-gutters"> USÓWA PIONOWE ODSTĘPY POMIĘDZY ZDJĘCIAMI  -->

<!-- ŻEBY STWOŻYĆ RESPONSYWNĄ SIATKĘ:
   1. ZBIORCZY POJEMNIK: class="container" LUB "class=container-fluid"
    2. W JEGO WNĘTRZU TWORZYMY WIERSZ SIATKI: class="row"
      3.WEWNĄTRZ WIERSZA SIATKI: class="row" TWORZYMY KOLUMNY
        TYPU: <div class="pizama" "col-sm-6 col-md-3 "> JAK NASZE
        12 KOLUMN "KAFELKÓW" (POD SOPEM) JEST ZGRUPOWANYCH W JEDNYM WIERSZU: <div class="row"> -->
          <div class="col-sm-6 col-md-3 ">
   <!--  <div class="col-sm-6 col-md-5 offset-md-1">- offset-md-1 - DWA OBRAZY USTAWIONE
         OD LEWEJ STRONY OD ROZMIARU: md-MIDUM  W ZWYŻ
         PRZESUŃ W PRAWO O JEDNĄ KOLUMNĘ ŻEBY ZNALAZŁY SIĘ NA ŚRODKU    -->
            <figure><!--  <figure> OBRAZ -->
              <a href="#"><img src="img/ciazowa-do-karmienia.jpg"  alt="ciążowa-do-karmienia"></a>
              <figcaption>ciążowa-do-karmienia</figcaption><!--  </figcaption> PODPIS DO OBRAZU -->
            </figure>
          </div>

<!--<div class="w-100"></div> ŁAMIE LINIĘ: PIERWSZE ZDJĘCIE POD SPODEM i kolejne PRZENOSI DO NOWEJ LINII-->
          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/koszula-nocna.jpg" alt="koszula-nocna"></a>
              <figcaption>koszula-nocna</figcaption>
            </figure>
          </div>

          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/koszula-nocna-dluga.jpg" alt="koszula-nocna-dluga"></a>
              <figcaption>koszula-nocna-dluga</figcaption>
            </figure>
          </div>

          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/koszula-nocna-grochy.jpg" alt="koszula-nocna-grochy"></a>
              <figcaption>koszula-nocna-grochy</figcaption>
            </figure>
          </div>

          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/koszula-nocna-siatka.jpg" alt="koszula-nocna-siatka"></a>
              <figcaption>koszula-nocna-siatka</figcaption>
            </figure>
          </div>

          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/koszula-nocna-odkryte-ramiona.jpg" alt="koszula-nocna-odkryte-ramiona"></a>
              <figcaption>koszula-nocna-odkryte-ramiona</figcaption>
            </figure>
          </div>

          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/shirt-do-spania-oversize.jpg" alt="shirt-do-spania-oversize"></a>
              <figcaption>shirt-do-spania-oversize</figcaption>
            </figure>
          </div>

          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/pizama-z-krotkimi-spodenkami.jpg" alt="pizama-z-krotkimi-spodenkami"></a>
              <figcaption>pizama-z-krotkimi-spodenkami</figcaption>
            </figure>
          </div>

          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/szlafrok-z-dzianiny-shirtowej.jpg" alt="szlafrok-z-dzianiny-shirtowej"></a>
              <figcaption>szlafrok-z-dzianiny-shirtowej</figcaption>
            </figure>
          </div>

          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/pizama.jpg" alt="pizama"></a>
              <figcaption>pizama</figcaption>
            </figure>
          </div>

          <div class="col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/pizama-ze-spodniami-3-4.jpg" alt="pizama-ze-spodniami-3-4"></a>
              <figcaption>pizama-ze-spodniami-3-4</figcaption>
            </figure>
          </div>

          <div class"col-sm-6 col-md-3">

            <figure>
              <a href="#"><img src="img/koszula-nocna-myszka-minnie.jpg" alt="koszula-nocna-myszka-minnie"></a>
              <figcaption>koszula-nocna-myszka-minnie</figcaption>
            </figure>
          </div>




      </div>
    </div>
  </section>
</main>
<!-- DODATKOWE ATRYBUTY  integrity ORAZ crossorigin - NOWY POMYSŁ NA ŁADOWANIE POTRZEBNYCH ŻRÓDEŁ
WRAZ ZE SPRAWDZENIEM INTEGRALNOŚCI ICH POCHODZENIA -
..MOGĄ BYĆ WPISANE ALE NIE MUSZĄ..-->

<!--  integrity - POZWOLI NIE ŁADOWAĆ DO PRZEGLĄDARKI KODU KTÓRY ZOSTAŁ W JAKIŚ SPOSÓB ZMANIPULOANY WZGLĘDEM OFICJALNEGO "RYLISU" -->

<!--  crossorigin - ATRYBUT crossorigin JEST OBECNY KIEDY KORZYSTAMY Z TZW. MECHANIZMU "CORS"(CROSS-ORIGIN-RESOURCE SHARING)
POZWALA UŻYWAĆ DODATKOWYCH NAGŁÓWKÓW "HTTP" NA STRONACH  KRÓRE TEORETYCZNIE PRZESTRZEGAJĄ
ZASADY " SEIM ORIGIN" CZYLI ŁADUJĄ SWOJE ZASOBY Z JEDNEJ DOMENY-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="js/bootstrap.min.js"></script>
<?php include './widoki/stopka.php'; ?>
