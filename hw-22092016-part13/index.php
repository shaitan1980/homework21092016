<?php 
session_start(); 

if($_POST) {
	$_SESSION['page1'] = $_POST['page1'];
	header('location: page2.php');
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
				<h1>Тест - страница 1</h1>
				<p>1. Слон это?</p>
				<form class="form-horizontal" action="<?= $_SERVER['SCRIPT_NAME']; ?>" method="POST">
					<div class="radio">
					  <label>
					    <input type="radio" name="page1" id="optionsRadios1" value="Птица">
					    Птица
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="page1" id="optionsRadios1" value="Животное">
					    Животное
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="page1" id="optionsRadios1" value="Рыба">
					    Рыба
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

