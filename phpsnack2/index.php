<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi
che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

  $name = $_GET["name"];

  $mail = $_GET["mail"];
  $check_at_mail = strpos($mail, "@");
  $check_dot_mail = strpos($mail, ".");

  $age = $_GET["age"];



  if (strlen($name) <= 3 || $check_at_mail === false || $check_dot_mail === false || is_int($age)) { ?>
    Accesso negato
  <?php } else { ?>
    Accesso riuscito
  <?php } ?>
