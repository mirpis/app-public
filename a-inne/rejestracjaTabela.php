<?php include './widoki/glowny.php';?>

<!-- -->
<div class="container d-flex justify-content-center flex-column mt-5 p-5 col-md-4 border rouned">

  <h3>Zarejestruj się</h3>
  <form class="" action="http://localhost/app/zarejestruj-sie" method="post">

       Login: <br /> <input type="text" value="<?php
        if (isset($_SESSION['fr_login']))
        {
          echo $_SESSION['fr_login'];
          unset($_SESSION['fr_login']);
        }
       ?>" name="login" /> <br />

       <?php
         if (isset($_SESSION['e_login']))
         {
           echo '<div class="error">'.$_SESSION['e_login'].'</div>';
           unset($_SESSION['e_login']);
         }
        ?>
        E-mail: <br /> <input type="text" value="<?php
        if (isset($_SESSION['fr_email']))
        {
          echo $_SESSION['fr_email'];
          unset($_SESSION['fr_email']);
        }
      ?>" name="email" /><br />

      <?php
        if (isset($_SESSION['e_email']))
        {
          echo '<div class="error">'.$_SESSION['e_email'].'</div>';
          unset($_SESSION['e_email']);
        }
      ?>

      Twoje hasło: <br /> <input type="password"  value="<?php
        if (isset($_SESSION['fr_haslo1']))
        {
          echo $_SESSION['fr_haslo1'];
          unset($_SESSION['fr_haslo1']);
        }
      ?>" name="haslo1" /><br />

      <?php
        if (isset($_SESSION['e_haslo']))
        {
          echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
          unset($_SESSION['e_haslo']);
        }
      ?>

      Powtórz hasło: <br /> <input type="password" value="<?php
        if (isset($_SESSION['fr_haslo2']))
        {
          echo $_SESSION['fr_haslo2'];
          unset($_SESSION['fr_haslo2']);
        }
      ?>" name="haslo2" /><br />

      <label>
        <input type="checkbox" name="regulamin" <?php
        if (isset($_SESSION['fr_regulamin']))
        {
          echo "checked";
          unset($_SESSION['fr_regulamin']);
        }
          ?>/> Akceptuję regulamin
      </label>

      <?php
        if (isset($_SESSION['e_regulamin']))
        {
          echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
          unset($_SESSION['e_regulamin']);
        }
      ?>

      <div class="g-recaptcha" data-sitekey="6LcuSaIUAAAAAFEnYx8nS65uFj0iTt52suYDhPcJ"></div>
      <!-- POWYŻEJ JAWNY KLUCZ WITRYNY Z: Google reCAPTCHA -->

      <?php
        if (isset($_SESSION['e_bot']))
        {
          echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
          unset($_SESSION['e_bot']);
        }
      ?>

      <br />

      <input type="submit" value="Zarejestruj się" />

   </form>
</div>
