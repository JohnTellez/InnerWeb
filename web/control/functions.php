<?php

function validateLogIn($user, $pass){
	$query = "SELECT id FROM users WHERE username='$user' AND pass='$pass' ";
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	return mysql_num_rows($result);
}
function saveContact($name, $phone, $email, $subject, $message){
	$name = utf8_decode($name);
	$phone = utf8_decode($phone);
	$email = utf8_decode($email);
	$subject = utf8_decode($subject);
	$message = utf8_decode($message);
	$query = "INSERT INTO contact (name, phone, email, subject, message) VALUES ('$name', '$phone', '$email', '$subject', '$message') ";
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	return true;
}
function getMessages(){
	$query = "SELECT * FROM contact WHERE status=1 ";
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($column = mysql_fetch_array($result, MYSQL_NUM)) {
    	echo "<tr><td>".utf8_encode($column[4])."</td><td>".utf8_encode($column[5])."</td><td>".utf8_encode($column[1])."</td><td>".utf8_encode($column[2])."</td><td>".utf8_encode($column[3])."</td>";
	}
}