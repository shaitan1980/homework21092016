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
				<?php 
					if(isset($_COOKIE['chekAuth'])) {
						require 'view_auth.php';
					}

				?>
				<h1>Авторизация пользователя</h1>
				<form action="auth.php" method="POST">
				  <div class="form-group">
				    <label for="name">Введите логин</label>
				    <input name="login" type="name" class="form-control" id="login" placeholder="login">
				  </div>
				  <div class="form-group">
				    <label for="name">Введите пароль</label>
				    <input name="password" type="password" class="form-control" id="password" placeholder="password">
				  </div>
				  <div class="form-group">
				    <label for="name">Введите email</label>
				    <input name="email" type="email" class="form-control" id="email" placeholder="email">
				  </div>
				  <button type="submit" class="btn btn-info">Авторизоваться</button>
				</form>

				<?php 
					if($_SESSION['authErr']) {
						require 'errors.php';
					}

				?>
			</div>
		</div>
	</div>
	<?php $_SESSION['authErr'] = ''; ?>
</body>
</html>

