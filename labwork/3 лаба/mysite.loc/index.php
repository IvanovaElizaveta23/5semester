<?php
include("lib.inc.php");
include("data.inc.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Наш сайт</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="header">
			<!-- Верхняя часть страницы -->
		<?php
		include("top.inc.php");
		?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1><?php echo $welcome?>, Гость!</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<?php
		include("index.inc.php");
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