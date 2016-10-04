<?php 
	date_default_timezone_set('Europe/Kiev');

	$ip = $_SERVER["REMOTE_ADDR"];

	if(!file_exists("stat.txt")) {
		$fo = fopen("stat.txt", "w"); //если такого файла нет, создать пустой, иначе на экран идет вывод ошибок
		fclose ($fo);
	} 
		
	if(file_exists("ip.txt")) {
		$fo = fopen("ip.txt", "r");
		flock($fo, LOCK_SH);
		$data = fread ($fo, filesize("ip.txt"));
		flock($fo, LOCK_UN);
		fclose ($fo);
	}	else {
		$fo = fopen("ip.txt", "w"); //если такого файла нет, создать пустой, иначе на экран идет вывод ошибок
		fclose ($fo);
	}
	
	if(!stristr($data,$ip)) {
		$file="ip.txt";
		$new_rec = $ip . "\r\n";
		file_put_contents($file, $new_rec, FILE_APPEND | LOCK_EX);

		$stat = 'stat.txt';
		$new_stat = $ip . "|" . date('d.m.o') . "\r\n";
		file_put_contents($stat, $new_stat, FILE_APPEND | LOCK_EX);
	}

	
	function getWeekStat($ip) {
		$count_w = 0;
		$lines = file('stat.txt', FILE_IGNORE_NEW_LINES);
		foreach ($lines as $line) {
		    $string = explode("|", $line);
		    if($string[0] == $ip) {
		    	$current = strtotime($string[1]);
		    	if($current <= time() && $current >= time()-60*60*24*7) {
		    		$count_w++;
		    	//echo "<p>" . "ip: " . $string[0] . " " . "дата: " . $string[1] . "</p>";
		    }

		    }
		}
		echo 'За неделю Вы посещяли эту страницу: ' . $count_w . ' раз';
	}

	function getTodayStat() {
		$lines = file('stat.txt', FILE_IGNORE_NEW_LINES);
		foreach ($lines as $line) {
		    $string = explode("|", $line);
		    if($string[1] == date('d.m.o')) {
		    	echo "<p>" . "ip: " . $string[0] . " " . "дата: " . $string[1] . "</p>";
		    }
		}
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
			<div class="col-md-6">
				<h4>Статистика посещений за сегодня</h4>
				<strong><p>Сегодня: <?= date('d.m.o'); ?></p></strong>
				<?= getTodayStat(); ?>
			</div>
			<div class="col-md-6">
				<h4>Статистика посещений за неделю</h4>
				<strong><p>c <?php echo date('d.m.o', time()-60*60*24*7); ?> по <?= date('d.m.o'); ?></p></strong>
				<?= getWeekStat($ip); ?>
			</div>
		</div>
	</div>
</body>
</html>

