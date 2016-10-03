<?php 
session_start(); 

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

if(clean($_POST['name'])) {
	$_SESSION['name'] = clean($_POST['name']);

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
				<form action="index.php" method="POST">
				  <div class="form-group">
				    <label for="name">Введите имя</label>
				    <input name="name" type="name" class="form-control" id="login" placeholder="login">
				  </div>
				  <button type="submit" class="btn btn-info">Ввод</button>
				</form>
			</div>	
		</div>
	</div>
</body>
</html>

