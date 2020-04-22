<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
require("class.phpmailer.php");
require("class.smtp.php");
//Especificamos los datos y configuración del servidor
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
//Nos autenticamos con nuestras credenciales en el servidor de correo Gmail
$mail->Username = "tucorreo@gmail.com";
$mail->Password = "tupassword";
//Agregamos la información que el correo requiere
$mail->From = "tucorreo@gmail.com";
$mail->FromName = "Tu Nombre";
$mail->Subject = "Enviar Mail con PHPMailer";
$mail->AltBody = "";
$mail->MsgHTML("<h1>Hola Mundo!</h1>");
$mail->AddAttachment("adjunto.txt");
$mail->AddAddress("destinatario@hotmail.com", "Usuario Prueba");
$mail->IsHTML(true);
//Enviamos el correo electrónico
$mail->Send();
?>
</body>
</html>