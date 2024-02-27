<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "juanbenavidesavila@email.com"; // Dirección de correo electrónico 
    $asunto = "Mensaje de formulario web";
    $contenido = "Nombre: $nombre\nCorreo electrónico: $email\nMensaje: $mensaje";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $contenido);

    // Redirige de vuelta a la página de origen o a una página de confirmación
    header('Location: gracias.html');
} else {
    // Si alguien intenta acceder directamente al script, redirige a una página de error
    header('Location: error.html');
}
?>















<!-- 
/php 
$destino = "biocenter.contactanos@gmail.com";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$rut = $_POST["rut"];
$mail = $_POST["mail"];
$telefono = $_POST["telefono"];
$metodo = $_POST["metodo"];
$edificio = $_POST["edificio"];
$contenido = "nombre:" . $nombre . "\napellido:" . $apellido . "\nrut:" . $rut . "\nmail:" . $mail . "\ntelefono:" . $telefono . "\nmetodo:" . $metodo . "\nedificio:" . $edificio;
mail($destino, "consulta", $contenido);
header("Location:index.html");
 

-->