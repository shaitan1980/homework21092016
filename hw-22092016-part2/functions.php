<?php 
session_start(); 
setUsernameInCookie();

function setUserNameInSession() {
	
	if(isset($_POST['name'])) {
		$_SESSION['username'] = $_POST['name'];
	}

}


function setUsernameInCookie() {
	if(isset($_POST['name'])) {
		if(isset($_COOKIE['userNameCook'])){
			setcookie("userNameCook", $_POST['name'], time()-3600);
		}
		setcookie("userNameCook", $_POST['name'], time()+3600);
	} 

}


?>