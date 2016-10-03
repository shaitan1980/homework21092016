<?php
require_once 'functions.php';

require_once 'header.php';

require_once 'navigation.php';

$pages = $_SESSION['pages'];

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
			<h1>Страница статистика</h1>
			<p>Вывод списка посещенных страниц:</p>
			<ul>
				<?php foreach($pages as $item): ?>
					<li><a href="<?= $item ?>"><?= $item ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>

	</div>
</div>
	
</body>
</html>