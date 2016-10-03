<?php 
session_start(); 

if($_POST) {
	$_SESSION['page3'] = $_POST['page3'];
	header('location: result.php');
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
				<h1>Тест - страница 3</h1>
				<p>3. Майкл Джексон был?</p>
				<form class="form-horizontal" action="<?= $_SERVER['SCRIPT_NAME']; ?>" method="POST">
					<div class="radio">
					  <label>
					    <input type="radio" name="page3" id="optionsRadios1" value="Космонавтом">
					    Космонавтом
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="page3" id="optionsRadios1" value="Певцом">
					    Певцом
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="page3" id="optionsRadios1" value="Боксером">
					    Боксером
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

