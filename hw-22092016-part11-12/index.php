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
				<form action="form.php" method="POST">
				  <div class="form-group">
				    <label for="city">Введите ваш город</label>
				    <input name="city" type="text" class="form-control" id="city">
				  </div>
				  <div class="form-group">
				    <label for="age">Введите ваш возраст</label>
				    <input name="age" type="text" class="form-control" id="age">
				  </div>
				  <button type="submit" class="btn btn-info">Ввод</button>
				</form>
				<?php 
					if($_SESSION['err']) {
						echo "<p>" . $_SESSION['err'] . "</p>";
					}
				?>
			</div>	
		</div>
	</div>
</body>
</html>

