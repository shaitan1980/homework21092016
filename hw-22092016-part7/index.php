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
				<form action="test.php" method="POST">
				  <div class="form-group">
				    <label for="country">Введите страну</label>
				    <input name="country" type="text" class="form-control" id="country">
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

