<?php 
session_start(); 

if(!isset($_SESSION['time'])) {

	$_SESSION['time'] = time();
}

$stat = time() - $_SESSION['time'];

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
				<p>Пользователь зашел на страницу <?= $stat; ?> секунд назад</p>
			</div>	
		</div>
	</div>
</body>
</html>

