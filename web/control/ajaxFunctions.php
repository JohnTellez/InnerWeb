<?php
require "../conexion.php";

$option = $_REQUEST["option"];

switch ($option) {
	case 'createUser':
		$fName = $_REQUEST["name"];
		$lName = $_REQUEST["lName"];
		$email = $_REQUEST["email"];
		$user = $_REQUEST["user"];
		$pass = $_REQUEST["pass"];

		$query = "INSERT INTO users (fName, lName, email, username, pass) VALUES ('$fName', '$lName', '$email', '$user', '$pass') ";
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		break;

	case 'validateEmail':
		$email = $_REQUEST["email"];

		$query = "SELECT id FROM users WHERE email='$email' ";
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		echo mysql_num_rows($result);
		break;
	case 'validateUsername':
		$user = $_REQUEST["user"];

		$query = "SELECT id FROM users WHERE username='$user' ";
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		echo mysql_num_rows($result);
		break;
	
	default:
		# code...
		break;
}