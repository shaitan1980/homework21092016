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
				<p>Привет, <?= $_SESSION['name']; ?></p>
			</div>	
		</div>
	</div>
	<?php unset($_SESSION['name']); ?>
</body>
</html>
