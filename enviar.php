<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];   // receptor
$correo2 = $_POST['correo2']; // remitente
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = $correo;
$asunto = "Contacto desde nuestra pagina web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo2 \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>