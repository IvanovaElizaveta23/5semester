<?php
include("lib.inc.php");
include("data.inc.php");
$title = 'Наш сайт';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'])));
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="content">
			<!-- Заголовок -->
			<h1><?php echo $welcome?>, Гость!</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<?php
				switch($id) {
					case 'about': include 'about.php'; break;
					case 'contact': include 'contact.php'; break;
					case 'table': include 'table.php'; break;
					default: include 'index.inc.php';
				}
			?>
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<?php
		include("menu.inc.php");
		?>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<?php
		include("bottom.inc.php");
		?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>