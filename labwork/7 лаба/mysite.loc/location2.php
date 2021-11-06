<form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
	<select name='checkbox'>
		<option value="1">Yandex</option>
		<option value="2">Google</option>
		<option value="3">Rambler</option>
	</select>
	<INPUT TYPE="submit" name="button" />
</form>
<?php
	$loc = @$_POST['checkbox'];	
	$url;	
	switch($loc){
		case "1": $url = 'https://yandex.ru'; break;
		case "2": $url = 'https://google.com'; break;
		case "3": $url = 'https://rambler.ru'; break;}
            
	if ($url) 
		header("Location: $url");
?>




