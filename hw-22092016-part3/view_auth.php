<p>Добро пожаловать: <strong><?= $_COOKIE['chekAuth']; ?></strong></p>
<p>
	<form action="logout.php" method="POST">
		<button type="submit" class="btn btn-success">Выход</button>
	</form>
</p>