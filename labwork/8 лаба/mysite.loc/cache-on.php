<?
header("Cache-control: max-age=3600");//Определяет количество времени, которое файл должен находиться в кэше, и метод кэширования.
header("Expires: " . date("r", time() + 600));
?>

<html>
<head>
	<title>Разрешение кеширования</title>
</head>

<body>
<h1>Разрешение кеширования</h1>
<h1><?=date("H:i:s")?></h1>

</body>
</html>