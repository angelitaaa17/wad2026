<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Subir archivo</title>
</head>

<body>
	<?php
    $directorio = ini_get("upload_tmp_dir");
    echo $directorio;

    $directorioTemp = $_FILES['.imagen']['tmp_name'];
    move_uploaded_file($directorioTemp,$_FILES['imagen']['name']);
?>
	
</body>
</html>