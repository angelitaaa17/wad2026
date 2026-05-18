<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        //Funciones de Arrays 
        
        $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
        
        //var_dump($dias);
        asort($dias);
        //var_dump($dias);
        $numeros = array(10, 11, 8, 103, 99, 54);
        //var_dump($numeros);
        //echo "<br>";

        //ksort($numeros);
        //var_dump($numeros);
        //echo "<br>";
        
        $arraynombres = array("Javier"=>"29","Patricia"=>"18","Emilio"=>"26");
        var_dump($numeros);
        echo "<br>";

        ksort($arraynombres);
        var_dump($arraynombres);
        echo "<br>";

        shuffle($dias);
        var_dump($dias);
	    echo "<br>";
        ?>
</body>
</html>