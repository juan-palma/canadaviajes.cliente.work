<?php
defined('_JEXEC') or die('Acces denied');

//$mysqli = new mysqli( decpt(DB_HOST, APP_KEY), decpt(DB_USER, APP_KEY), decpt(DB_PASSWORD, APP_KEY), decpt(DB_NAME, APP_KEY) );
$mysqli = new mysqli( "localhost", "amxcommx_lmxusr", "+RukM1^HCSDO", "amxcommx_dam" );

	/* verificacion de errores oficial no compatible con versiones 5.3 he inferior. */
	if ($mysqli->connect_error) {
	    die('Error de Conexión (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
	}

?>