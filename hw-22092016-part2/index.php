<?php 
require_once 'functions.php'; 

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
				<h1>Главная</h1>
				
				<h3>Форма ввода: </h3>

				<form action="index.php" method="POST">
				  <div class="form-group">
				    <label for="name">Введите Ваше имя</label>
				    <input name="name" type="name" class="form-control" id="name" placeholder="Имя">
				  </div>
				  <button type="submit" class="btn btn-default">Ввести имя</button>
				</form>
			</div>

		</div>
		<?php 
			if(isset($_SESSION['username'])) {
				include 'name.php';
			}

			if(isset($_COOKIE['userNameCook'])) {
				include 'name_cook.php';
			}

		?>
	</div>
</body>
</html>

