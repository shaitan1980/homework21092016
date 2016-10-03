<?php 
session_start();

session_destroy();
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
					if(!count($_SESSION)) {
						echo '<h1>Сессия закрыта</h1>';
					}
				?>
				
			</div>	
		</div>
	</div>
</body>
</html>
