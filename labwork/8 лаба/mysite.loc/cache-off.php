<?
header("Cache-control: no-store");//Директива категоричного запрета на кэширование (в кэше не должны сохраняться части ни запроса, ни ответа). 
header("Expires: " . date("r"));
?>

<html>
<head>
	<title>Запрет кеширования</title>
</head>

<body>
<h1>Запрет кеширования</h1>
<h1><?=date("H:i:s")?></h1>

</body>
</html>
 