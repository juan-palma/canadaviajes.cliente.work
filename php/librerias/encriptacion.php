<?php
defined('_JEXEC') or die('Acces denied');

function encpt($cadena, $clave)
{
	$cifrado = MCRYPT_RIJNDAEL_256;
	$modo = MCRYPT_MODE_CBC;
	return base64_encode(mcrypt_encrypt($cifrado, md5($clave), $cadena, $modo, md5(md5($clave))));
}

function decpt($cadena, $clave)
{
    $cifrado = MCRYPT_RIJNDAEL_256;
    $modo = MCRYPT_MODE_CBC;
    return preg_replace('/[^\x20-\x7E\xA1-\xFF]/', "", mcrypt_decrypt($cifrado, md5($clave), base64_decode($cadena), $modo, md5(md5($clave))));
}
?>
