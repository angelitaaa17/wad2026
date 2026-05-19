<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comprobar</title>
</head>

<body>
<?php 

	$encontrado = FALSE;

	$minombre = $_GET["nombre"];

	$host = "localhost";
	$usuario = "root";
	$pass = "";
	$conexion = mysqli_connect($host,$usuario,$pass) or die("Error de conexión");

	mysqli_select_db($conexion,"usuarios");
	
	//creamos la sentencia SQL de consulta
	 $consultar = "SELECT nombre FROM clientes";

	$registros=mysqli_query($conexion,$consultar);
	
	while($registro=mysqli_fetch_row($registros)){
		echo "Nombre: ".$registro[0];
		echo "<p> </p>";
		if($registro[0] == $minombre){
			$encontrado = TRUE;
		}
	}
	if($encontrado){
			$sql = "DELETE FROM clientes WHERE nombre = '$minombre'";
			mysqli_query($conexion, $sql);
			echo $minombre . " ha sido borrado de la base de datos";
	}
	else{
			echo $minombre . " no se encuentra en la base de datos";
	}
?>

</body>
</html>