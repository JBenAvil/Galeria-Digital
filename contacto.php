<?php
$para = $_POST"biocenter.contactanos@gmail.com";
$asunto = "Asunto del mensaje";

mail($para, $asunto, utf8_decode($message), $header);

$name = $_POST["nombre"];
$apellido = $_POST["apellido"];
$rut = $_POST["rut"];
$email = $_POST["email"];
$telefono= $_POST["telefono"];
$metodo = $_POST["metodo_financiamiento"];
$edificio = $_POST["edificio"];

$header = "From: " . $email . " \r\n";
$header .= "x-Mailer: PHP/" .phpversion() . " \r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "de apellido: " . $apellido . " \r\n";
$message .= "con el rut: " . $rut . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Su telefono es: " . $telefono . " \r\n";
$message .= "con el metodo de financiamiento: " . $metodo_financiamiento . " \r\n";
$message = "para el edificio: " . $edificio . " \r\n";


header("Location:index.html");
?>
