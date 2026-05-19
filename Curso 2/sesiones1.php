<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
	session_id("22");
	echo session_id(); 
	echo "<p> </p>";
	echo session_name();
    session_start();
	
	$_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = "Luisja";
  
	var_dump($_SESSION);
  
	echo "Nombre: ".$_SESSION['nombre']."<br />";
	// Borrar las variables de sesión
    unset($_SESSION['nombre']); 

	if( isset($_SESSION['nombre']) == false ){
		echo "Nombre no definido.<br />";
    }
    session_destroy();
	echo   $_SESSION["iniciada"];
	
?>
</body>
</html>