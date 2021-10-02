<?php
    $destinatario = 'info@limpiezamacarenasevilla.es';
    $name = $_POST['name'];
    $phone = $_POST['phoneNumber'];
    $mail = $_POST['email'];
    $servicio = $_POST['tipo-asunto'];
    $textarea = $_POST['textarea'];

    $header = 'Enviado desde la página web Limpiezas Macarena';
    $header .= 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message .= "Su e-mail es: " . $mail . " \r\n";
    $message .= "Teléfono de contacto: " . $phone . " \r\n";
    $message .= "Asunto: " . $servicio . " \r\n";
    $message .= "Mensaje: " . $_POST['textarea'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    mail($destinatario, $servicio, utf8_decode($message), $header);
    echo "<script>alert('Su mensaje se ha enviado con éxito')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";

?>
