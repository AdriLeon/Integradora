<?php
error_reporting(-1);
$dbhost="localhost";
if ($_SERVER["REMOTE_ADDR"]=="127.0.0.1" )
{
	$dbname="calendario";
	$dbuser="root";
	$dbpass="root";
}
else
{
	$dbname="calendario";
	$dbuser="root";
	$dbpass="root";
}

$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($db->connect_errno) {
	die ("<h1>Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error."</h1>");
}
?>