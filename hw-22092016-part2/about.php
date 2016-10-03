<?php require_once 'functions.php'; ?>

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
				<h1>О нас</h1>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non asperiores amet ea placeat animi veritatis voluptatem libero aspernatur, praesentium accusantium est, hic sit id illo, enim. Porro ab explicabo harum voluptatum at laborum natus nisi voluptate quaerat mollitia sint recusandae ipsa facere id, qui unde provident consequatur eaque assumenda distinctio? Eius ex totam excepturi adipisci, nostrum atque unde dolore, quae dicta ducimus accusamus alias sit sapiente. Qui quia dolores quidem, odio quis debitis deleniti quos sunt at eius, consequuntur provident et quo delectus mollitia libero suscipit corrupti nihil in. Deleniti unde sunt minus omnis odit ipsa, reiciendis molestiae sequi laboriosam rerum atque repellendus cumque modi, neque harum eaque saepe iste ad aliquam pariatur. Impedit consequuntur vitae error, ipsa sit, eveniet, modi nemo recusandae hic eaque dolores placeat eligendi expedita blanditiis officia ut natus excepturi similique obcaecati iste! Atque dignissimos fuga similique beatae velit alias est repellendus quasi voluptate optio soluta possimus recusandae id fugiat quas neque, minima delectus quod veniam eos distinctio maxime praesentium accusamus ipsam? Delectus explicabo fugit placeat mollitia eos a repudiandae commodi voluptates libero, eveniet expedita, enim culpa at aut tempora maxime fuga, quod voluptatum excepturi veritatis dolores inventore minima in voluptatibus. Laboriosam alias omnis, mollitia nihil?</p>

			</div>

		</div>
		<?php 
			if(isset($_SESSION['username'])) {
				include 'name.php';
			}

			if(isset($_COOKIE['userNameCook'])) {
				include 'name_cook.php';
			}
		?>
	</div>
</body>
</html>

