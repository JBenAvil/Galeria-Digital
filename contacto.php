<?php
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
header("Location:index.html")
  
?>
