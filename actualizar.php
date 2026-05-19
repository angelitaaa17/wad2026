<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comprobar</title>
</head>

<body>
<?php 

	$minombre = $_GET["nombre"];

	$modificar = $_GET["seleccionar"];

	$host = "localhost";
	$usuario = "root";
	$pass = "";

	$conexion = mysqli_connect($host,$usuario,$pass) or die("Error de conexión");

	mysqli_select_db($conexion,"usuarios");

	 $sql = "UPDATE clientes SET nombre = '$minombre' WHERE nombre = '$modificar'";

	mysqli_query($conexion,$sql);
	
?>

</body>
</html>