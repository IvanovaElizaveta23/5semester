<!DOCTYPE html>
<html>
	<head>
		<title>Контакты</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="content">

<?php
	define('DB_HOST','localhost');
	define('DB_LOGIN','root');
	define('DB_PASSWORD','');
	define('DB_NAME','web');
	$link=mysqli_connect(DB_HOST,DB_LOGIN, DB_PASSWORD, DB_NAME);
	
	function clearStr($data){
		global $link;
		return mysqli_real_escape_string($link,trim(strip_tags($data)));
	}
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = clearStr($_POST['subject']);
		$msg = clearStr($_POST['body']);
		$email = clearStr($_POST['email']);
		$sql = "INSERT INTO contact(name, msg, email) VALUES('$name','$msg', '$email')";
		mysqli_query($link,$sql) or die(mysqli_error($link));
		header('Location:'.$_SERVER['REQUEST_URI']);
		exit;
	}
?>
			
			<!-- Область основного контента -->
			<h1>Адрес</h1>
			<p></p>
			<h3>Задайте вопрос</h3>
			<form action='' method='post'>
			<label>E-Mail: </label><br />
			<input name='email' type='text' size="70"/><br />	
				<label>Тема письма: </label>
				<br>
				<input name='subject' type='text' size="70"/>
				<br>
				<label>Содержание: </label>
				<br>
				<textarea name='body' cols="57,5" rows="25"></textarea>
				<br>
				<br>
				<input type='submit' value='Отправить' />
			</form>	
			<!-- Область основного контента -->
		</div>
		
	</body>
</html>