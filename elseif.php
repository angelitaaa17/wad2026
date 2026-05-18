<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        $valor1 = 2;
        $valor2 = 6;
        $dia = 4;

        //Estructuras de control de flujo de selección
        
        if ($valor1 > $valor2) {
            echo "valor1 es mayor que valor2";
        } 
        elseif ($valor1 == $valor2) {
            echo "valor1 es igual que valor2";
        } 
        else 
        {
            echo "valor1 es menor que valor2";
        }
        
        echo "<p> </p>";
        
        if ($dia == 1) {
            echo "Lunes";
        } 
        elseif ($dia == 2) {
            echo "Martes";
        } 
        elseif ($dia == 3) {
            echo "Miércoles";
        }
        elseif ($dia == 4) {
            echo "Jueves";
        }
        elseif ($dia == 5) {
            echo "Viernes";
        } 
        elseif ($dia == 6) {
            echo "Sábado";
        }
        else{
            echo "Domingo";
        }
    ?>
</body>
</html>