<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	echo getcwd();

	$directorio = scandir(getcwd());
	var_dump($directorio);
	
	chdir('../');
	
?>
</body>
</html>