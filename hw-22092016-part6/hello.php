<?php
session_start();

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

if(clean($_POST['phone'])) {
	$_SESSION['phone'] = clean($_POST['phone']);

	if($_SESSION['err']) {
		unset($_SESSION['err']);
	}

} else {
	$_SESSION['err'] = 'Поле обязательно к заполнению!';
	header('location: /index.php');
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
				<form action="" method="POST">
				  <div class="form-group">
				    <label for="name">Введите имя</label>
				    <input name="name" type="text" class="form-control" id="name" placeholder="имя">
				  </div>
				  <div class="form-group">
				    <label for="name2">Введите фамилию</label>
				    <input name="name2" type="text" class="form-control" id="name2" placeholder="фамилия">
				  </div>
				  <div class="form-group">
				    <label for="name">Телефон</label>
				    <input name="phone" type="tel" class="form-control" id="phone" value="<?= $_SESSION['phone']; ?>">
				  </div>
				  <button disabled type="submit" class="btn btn-info">Ввод</button>
				</form>
			</div>	
		</div>
	</div>
</body>
</html>
