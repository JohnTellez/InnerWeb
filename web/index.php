<?php
require "conexion.php";
require "control/functions.php";
session_start();
if(!empty($_REQUEST['logout'])){
	$_SESSION['user'] = null;
	session_destroy();
}
if(!empty($_REQUEST['start'])){
	$user = $_REQUEST["username"];	
	$pass = $_REQUEST["password"];	

	if(validateLogIn($user, $pass) > 0){
		$_SESSION['user'] = $user;
	}
}

// Guardar contacto
if(!empty($_REQUEST['saveContact'])){
	$name 	 = $_REQUEST['name'];
	$phone 	 = $_REQUEST['phone'];
	$email 	 = $_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];
	if(saveContact($name, $phone, $email, $subject, $message)){
		echo '<div class="alert alert-success fade in alert-dismissable" style="position: fixed;width: 100%;z-index: 100;height: 80px;font-size: 22px;"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>La información se guardó correctamente!</strong></div>';
	}
}


if(!empty($_SESSION['user'] )){
	include "indexUser.php";
}
else{
	if(!empty($_REQUEST['start'])){
		echo '<div class="alert alert-danger fade in alert-dismissable" style="position: fixed;width: 100%;z-index: 100;height: 80px;font-size: 22px;"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>El usuario o contraseña no son correctos!</strong> Indica un usuario o contraseña diferente.</div>';
	}
	include "index.html";
}

include "modals.html";