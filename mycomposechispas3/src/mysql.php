<?php
$hostname	= "mysql";
$dbname		= "pps";
$username	= "pps";
$password	= "pps";

try {

	$conn = new PDO( "mysql:host=$hostname;dbname=$dbname", $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	echo "A tope de Conexion";
}
catch( PDOException $e ) {

	echo "Uh-oooh: " . $e->getMessage();
}

$conn = null;