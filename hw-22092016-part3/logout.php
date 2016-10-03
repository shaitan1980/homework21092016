<?php

if(isset($_COOKIE['chekAuth'])) {
	setcookie('chekAuth', '', time()-3600);
	header("Location: index.php");
}

?>