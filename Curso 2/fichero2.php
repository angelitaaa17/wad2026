<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	$miarchivo = fopen("archivo2.txt", "a+");
	
	 //fwrite($miarchivo, "Escribiendo en el archivo");
	 
	 //fflush($miarchivo);
	 
     $arrayinfo = stat("archivo2.txt");
	 var_dump($arrayinfo);
	  echo filesize("archivo2.txt");
?>
</body>
</html>