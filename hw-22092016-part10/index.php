<?php 
session_start(); 

if(!isset($_SESSION['count'])) {

	$_SESSION['count'] = 0;

} else {

	$_SESSION['count']++;

}


?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>PHP Academy Home work</title>
	<?php require_once 'header.php'; ?>
</head>
<body>
	<?php require_once 'navigation.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p><?= $_SESSION['count']; ?> обновлений страницы</p>
			</div>	
		</div>
	</div>
</body>
</html>

