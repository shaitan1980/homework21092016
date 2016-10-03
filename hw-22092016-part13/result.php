<?php 
session_start(); 



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
				<h1>Ваши ответы: </h1>
				<p>1. Слон это? - <strong><?= $_SESSION['page1']; ?></strong></p>
				<p>2. На ноль делить? - <strong><?= $_SESSION['page2']; ?></strong></p>
				<p>3. Майкл Джексон был? - <strong><?= $_SESSION['page3']; ?></strong></p>
				<p><a href="/index.php">Вернуться в начало</a></p>
			</div>	
		</div>
	</div>
</body>
</html>

