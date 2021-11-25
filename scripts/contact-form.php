<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message']

    $email_from = 'andre.altersbegrer@gmx.at';

    $email_subject = "Neue Nachricht";

    $email_body = "Name: $name.\n".
                    "Email: $visitor_email.\n".
                        "Nachricht: $message.\n";

    $to = "andre.altersberger@gmail.com";

    $headers = "Von $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Lication: kontakt.html")


?>