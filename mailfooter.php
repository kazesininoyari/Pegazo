<?php

include("wcode_mailer/wcode_mailer.php");

  if(isset($_POST['email']) && isset($_POST['nombre'])){
    wcode_mail($_POST['email'], $_POST['nombre'], "cybergoth2016@gmail.com", "Contacto Pegazo-Net");
  }

?>
