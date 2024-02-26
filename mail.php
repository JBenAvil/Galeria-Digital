<?php
  if (issent($_POST["Enviar"])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $rut=$_POST["rut"];
    $mail=$_POST["mail"];
    $telefono=$_POST["telefono"];
    $metodo=$_POST["metodo"];
    $edificio=$_POST["edificio"];

    $destino="biocenter.contactanos@gmail.com";
    $asunto="solicitud de reunión"

    $contenido="nombre: $nombre \n";
    $contenido.="apellido: $apellido \n";
    $contenido.="rut: $rut \n";
    $contenido.="mail: $mail \n";
    $contenido.="telefono: $telefono \n";
    $contenido.="metodo: $metodo \n";
    $contenido.="edificio: $edificio;

    $header="From: galeria@digital.com";

    $mail=mail($destino, $asunto, $contenido, $header);

    if($mail){
      echo "<script>alert('El formulario fue enviado correctamente');</script>";
    }else{
      echo "<script>alert('El formulario no se envio');</script>";
    }
  }
?>