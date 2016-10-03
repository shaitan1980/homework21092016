<?php 
session_start(); 


function getListGuest() {
	if(!empty($_SESSION['pages'])) {

	if(!in_array($_SERVER['PHP_SELF'], $_SESSION['pages'])){
		$_SESSION['pages'][] = $_SERVER['PHP_SELF'];
	}

	} else {

		$_SESSION['pages'][] = $_SERVER['PHP_SELF'];
		
	}
}

?>