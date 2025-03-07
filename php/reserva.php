<?php
header("Cache-Control:no-cache, no-store, must-revalidate, max-age=0;");
header("Expires: Fri, 01 Jan 1990 12:00:00 GMT;");
header("Pragma:no-cache;");
header("Accept-Charset:UTF-8;");
header("Keep-Alive:300");

date_default_timezone_set('America/Mexico_City');
set_time_limit(0);

if(function_exists('mb_internal_encoding')){
	mb_internal_encoding('utf-8');
}

define('_JEXEC', 1);
define( 'OWNER', dirname(__FILE__) . '/owner/' );
define( 'LIBRARY', dirname(__FILE__) . '/librerias/' );


use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';








$json = array();
$json['status'] = 'ok';
$json['valores'] = array();
$json['errores']  = array();



$sitio = $_POST['sitio'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];

$valido = true;

if($sitio  == ""){
	$valido = false;
	$json['errores'][] = "El valor sitio esta vacío";
}

if($name  == ""){
	$valido = false;
	$json['errores'][] = "El valor nombre esta vacío";
}

if($mail  == ""){
	$valido = false;
	$json['errores'][] = "El valor mail esta vacío";
}

if($tel  == ""){
	$valido = false;
	$json['errores'][] = "El valor teléfono esta vacío";
}




$enlace = mysqli_connect("localhost", "root", "root", "radical_canada");

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}




if($valido === true){
	$sitioL = mysqli_real_escape_string($enlace, $sitio);
	$nameL = mysqli_real_escape_string($enlace, $name);
	$mailL = mysqli_real_escape_string($enlace, $mail);
	$telL = mysqli_real_escape_string($enlace, $tel);

	if (mysqli_query($enlace, "INSERT into registros (reg_nombre, reg_mail, reg_tel, reg_sitio) VALUES ('$nameL', '$mailL', '$telL', '$sitioL')")) {
	    $json['errores'][] = mysqli_affected_rows($enlace);
	} else{
		$json['valores'][] = "Se agrego correctamente los datos a la Base de datos.";
		$json['status'] = 'error';
	}
	
	
	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	try {
	    //Server settings
/*
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'user@example.com';                     // SMTP username
	    $mail->Password   = 'secret';                               // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to
*/
	
	    //Recipients
	    $mail->setFrom('edgar.hidalgo@travimp.com', 'CANADA-'.$sitio);
	    $mail->addAddress('juan.palma@me.com', 'Juan');     // Add a recipient
	    $mail->addReplyTo('edgar.hidalgo@travimp.com', 'CANADA-Travel');
	    $mail->addCC('soporte@idalibre.com');
		
	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Nuevo registro desde sitio web';
	    $mail->Body = "Se ha enviado un nuevo registro desde su sitio web $sitio <br /> Nombre: $name Mail: $mailL Tel: $tel ";
	    $mail->AltBody = 'sitio:' . $sitio . ', Nombre: ' . $name . ', Mail: ' . $mailL . ',  Tel: ' . $tel;
	
	    $mail->send();
	    $json['valores'][] = "Se envio correctamente el correo.";
	} catch (Exception $e) {
	    $json['errores'][] = "No. se pudo enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
	    $json['status'] = 'error';
	}
	
	

}




echo( json_encode($json) );
	
	
?>