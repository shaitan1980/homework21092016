<?php
session_start();

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}


if(empty($_POST['login']) || empty($_POST['password']) || empty($_POST['email'])) {

	$_SESSION['authErr'] = 'Все поля обязательны к заполнению';
	header("Location: index.php");
	exit;
	
} else {

	$login = clean($_POST['login']);
	$password = clean($_POST['password']);
	$email = clean($_POST['email']);

	if(($login === 'demo') && ($password === 'pass') && ($email === 'admin@admin.com') ) {
		setcookie('chekAuth', $login, time()+3600);
		header("Location: index.php");
		$_SESSION['authErr'] = '';
		exit;

	}
}


?>