<?php
    $destino= "altrenobyhummel@gmail.com";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $nacimiento = $_POST["nacimiento"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " .$nombre . "\nApellido: " .$apellido . "\nEdad: " .$edad . "\nNacimiento" .$nacimiento . "\nTelefono: " .$telefono . "\nCorreo: " .$correo .  "\nMensaje: " . $mensaje;
    mail($destino,"PreInscripcionAltreno", $contenido);
    header("Location:gracias.html");

?>