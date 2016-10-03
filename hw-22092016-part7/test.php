<?php
session_start();

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

if(clean($_POST['country'])) {
	$_SESSION['country'] = clean($_POST['country']);

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
				<h1>Ваша страна <?= $_SESSION['country']; ?></h1>
			</div>	
		</div>
	</div>
</body>
</html>
