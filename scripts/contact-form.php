<?php

   if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "andre.altersberger@gmx.at";
    $headers = "From: Kontakt Formular".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: kontakt.html?mailsend")
   }


?>