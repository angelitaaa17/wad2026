<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	setcookie("noexpira", 1 ); 
	
	setcookie("micookie", 2, time() + (60*2) ); 
	var_dump($_COOKIE);
	
	setcookie("idioma","esp");
	
	 if( isset( $_COOKIE['idioma']) && $_COOKIE['idioma'] == "esp" )
    {
        echo "<p>La cookie noexpira ha sido creada. Web en español</p>";
		echo "El valor de la Cookie 'idioma' es ".$_COOKIE['idioma'];
    }

	unset($_COOKIE['noexpira']);
	var_dump($_COOKIE);
	
?>
</body>
</html>