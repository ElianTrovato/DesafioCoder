<?php
$name = $_POST['name'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$select = $_POST['select'];
$descripcion = $_POST['descripcion'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .="Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $email . "\r\n";
$message .= "Telefono de contacto: " . $celular . " \r\n";
$message .= "Mensaje: " . $_POST['descripcion'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'eliantrovato@hotmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>