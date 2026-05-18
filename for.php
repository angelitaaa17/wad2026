<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        $num = 5;

    //Estructura de control de flujo for y foreach
	for ($i=1;$i<=10;$i++){
		echo $i;
		echo "<br/>";
	}
	
	echo "<p> </p>";
	
	for ($j=10;$j>=1;$j--){
		echo $j;
		echo "<br/>";
	}
	

	for ($k=0;$k<=10;$k=$k+2){
		echo $k;
		echo "<br/>";
	}
	for ($i=0;$i<=10;$i++){
		if($i%2 == 0){
			echo $i;
			echo "<br/>";
		}
	}

	for ($i=1;$i<=10;$i++){
		echo $num . " x " . $i . " = " . $i * $num;
		echo "<br/>";
	}
    ?>
</body>
</html>