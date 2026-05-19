<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Subir archivo</title>
</head>

<body>
	<?php
	
    $directorioSubida = "uploads/";
	$max_file_size = "51200";
	$extensionesValidas = array("jpg", "png", "gif");
	
	if(isset($_POST["submit"]) && isset($_FILES['imagen'])){
    	$errores = 0;
    	$nombreArchivo = $_FILES['imagen']['name'];
    	$filesize = $_FILES['imagen']['size'];
    	$directorioTemp = $_FILES['imagen']['tmp_name'];
    	$tipoArchivo = $_FILES['imagen']['type'];
    	$arrayArchivo = pathinfo($nombreArchivo);
		var_dump($arrayArchivo);
    	$extension = $arrayArchivo['extension'];

    	if(!in_array($extension, $extensionesValidas)){
        	echo "La extensión del archivo no es válida";
			$errores = 1;
    	}

    	if($filesize > $max_file_size){
        	echo "La imagen debe de tener un tamaño inferior a 50 kb";
			$errores = 1;
    	}

    	if($errores == 0){
        	$nombreCompleto = $directorioSubida.$nombreArchivo;
        	move_uploaded_file($directorioTemp, $nombreCompleto);
        	echo("El archivo se ha subido correctamente");
    }
}
?>
	
</body>
</html>