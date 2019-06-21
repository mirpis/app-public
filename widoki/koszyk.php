<?php include './widoki/glowny.php';
//poczatek_sesji();
?>
<div class="container d-flex justify-content-center flex-column mt-5  p-5 col-md-4 border rounded">

    <h1>Zakupy on-line</h1>
    <p><a href="http://localhost/app/pizamy/">Piżamy</a></p>
    <p><a href="http://localhost/app/koszule-nocne/">Koszule nocne</a></p>
    <p><a href="http://localhost/app/koszule-ciazowe/">Koszule ciążowe</a></p>
    <p><a href="http://localhost/app/szlafroki/">Szlafroki</a></p>
    <br />
    <form action="sklep.php" method="post">
      <input type="submit" name="pusty_koszyk"  value="Pusty koszyk" />
      <input type="submit" name="pokaz_koszyk"  value="Pokaż koszyk" />
    </form>
    <?php
      pusty_koszyk();
      pokaz_koszyk();
    ?>
</div>
