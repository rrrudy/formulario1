<?php
$destinatario ='hola@alex';
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];
$header ="enviado desde la pagina de rudy";
$mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;
mail($destinatario, $asunto, $mensaje, $header);
echo "<script>alert('correo enviado exitosamente)</script>";
echo "<script> setTimeout(\"location.href='index.html'\" ,1000)</script>";

?>
