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
				    <label for="email">Введите email</label>
				    <input name="email" type="email" class="form-control" id="email">
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

