<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];

$mensaje = "Este mensaje fue enviaado por " . $nombre . ",\r\n";
$mensaje .= "su e-mail es: " . $mail . " \r\n";
$mensaje .= "mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'whityou.info@gmail.com';
$asunto = 'Este mail fue enviado desde la web'

mail($para, $asunto, utf8_decode($mensaje), $header); 

header('mensaje.html');

?>