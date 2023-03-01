<?php
$to = "mauroagustin.manzo@gmail.com";
$subject = "Mail desde el formulario";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['mensaje'];
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Información del formulario</h1>
<p>Nombre del usuario: $nombre </p> 
<p>Email: $email </p> 
<p>Comentarios: $mensaje </p> 
</body>
</html>";
 echo 'Gracias por comunicarte';
mail($to, $subject, $message, $headers);
?>