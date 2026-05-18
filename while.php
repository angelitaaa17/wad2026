<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        //Estructura de control de flujo While
        $num = 10;
        $respuesta = "Oporto";
        $intentos = 1;

        while($num >= 0){
                echo $num;
                echo "<br>";
                $num++;
        }
    
        while($respuesta != "Lisboa"){
                echo "Intento " . $intentos;
                if($intentos == 3){
                    $respuesta = "Lisboa";	
                }
                $intentos++;
        }
    ?>
</body>
</html>