<?php include './widoki/glowny.php'; ?>

<h1>Podaj dane do wysyłki</h1>
<form action = "PodsumowanieZamowienia.php" method="post">
Imie i Nazwisko: <imput type="text" type="klient"><br>
Email: <input type="text" name="email"><br>
Adres: <textarea name="adres"></textarea><br>
<imput type="submit" value="zamawiam">
</form>
