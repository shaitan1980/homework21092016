<?php 
session_start(); 

if($_POST) {
	$_SESSION['page2'] = $_POST['page2'];
	header('location: page3.php');
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
				<h1>Тест - страница 2</h1>
				<p>2. На ноль делить?</p>
				<form class="form-horizontal" action="<?= $_SERVER['SCRIPT_NAME']; ?>" method="POST">
					<div class="radio">
					  <label>
					    <input type="radio" name="page2" id="optionsRadios1" value="Можно">
					    Можно
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="page2" id="optionsRadios1" value="Нельзя">
					    Нельзя
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="page2" id="optionsRadios1" value="Можно, если осторожно">
					    Можно, если осторожно
					  </label>
					</div>
					<br>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Выбрать</button>
					</div>
				</form>
			</div>	
		</div>
	</div>
</body>
</html>

