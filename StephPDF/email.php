<?php
    //incluimos la clase PHPMailer
	require_once('class.phpmailer.php');

	//instancio un objeto de la clase PHPMailer
	$mail = new PHPMailer(); // defaults to using php "mail()"

	//defino el cuerpo del mensaje en una variable $body
	//se trae el contenido de un archivo de texto
	//también podríamos hacer $body="contenido...";
	//$body = file_get_contents('contenido.html');
	//$Body = "Hola Yo... esto es una prueba...";
	//Esta línea la he tenido que comentar
	//porque si la pongo me deja el $body vacío
	// $body = preg_replace('/[]/i','',$body);

	//indico a la clase que use SMTP
	$mail­>IsSMTP();
	//permite modo debug para ver mensajes de las cosas que van ocurriendo
	$mail­>SMTPDebug = 2;
	//Debo de hacer autenticación SMTP
	$mail­>SMTPAuth = true;
	$mail­>SMTPSecure = "ssl";
	//indico el servidor de Gmail para SMTP
	$mail­>Host = "smtp.gmail.com";
	//indico el puerto que usa Gmail
	$mail­>Port = 465;
	//indico un usuario / clave de un usuario de gmail
	$mail­>Username = "amovenca@gmail.com";
	$mail­>Password = "amoven3272";
	$mail­>SetFrom('amovenca@gmail.com', 'Aplicaciones Moviles');
	$mail­>AddReplyTo("amovenca@gmail.com","Aplicaciones Moviles");
	$mail­>Subject = "Envío de email usando SMTP de Gmail";


	$mail­>MsgHTML("Hola que tal, esto es el cuerpo del mensaje! By Steph!");
	//indico destinatario
	$address = "tyfa1018@gmail.com";
	$mail­>AddAddress($address, "Stephanie Zabaleta");

	//Puedo definir un cuerpo alternativo del mensaje, que contenga solo texto
	//$mail­->AltBody = "Cuerpo alternativo del mensaje... By Stephanie";

	//inserto el texto del mensaje en formato HTML
	//$mail­->MsgHTML($Body);

	//asigno un archivo adjunto al mensaje
	//$mail­>AddAttachment("flyer-amovenca2.jpg");

	//envío el mensaje, comprobando si se envió correctamente
	if(!$mail­>Send()) {
	echo "Error al enviar el mensaje: " . $mail­>ErrorInfo;
	} else {
	echo "Mensaje enviado!!";
	}
/*if(!$mail­>Send()) {
echo "Error al enviar: " . $mail­>ErrorInfo;
} else {
echo "Mensaje enviado!";
}*/
?>