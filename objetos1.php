<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

	class PrimeraClase
	{
		public $nombre = 'Luisja';

		public function mostrarNombre() {
			echo $this->nombre;
		}
	}
	
	$instancia = new PrimeraClase();

	echo $instancia->nombre;

	$instancia->mostrarNombre();
?>
</body>
</html>