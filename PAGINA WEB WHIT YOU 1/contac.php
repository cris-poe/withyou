<?php

$nombre = $_POST['name'];
$apellido = $_POST['apellido']
$ciudad = $_cuidad['cuidad']
$telefono = $_telefono['telefono']
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "su apellido es: " . $apellido . " \r\n";
$mensaje .= "su cuidad es: " . $ciudad . " \r\n";
$mensaje .= "su telefono es: " . $telefono . " \r\n";
$mensaje .= "su e-mail es: " . $mail . " \r\n";
$mensaje .= "mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'whityou.info@gmail.com';
$asunto = 'Este mail fue enviado desde la web'

mail($para, $asunto, utf8_decode($mensaje), $header); 

header('mensaje.html');

?>

