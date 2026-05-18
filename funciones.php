<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        $numero1 = 5;
        $numero2 = 10;
        
        //Funciones
        
        function sumar(){
            echo "Soy una función para sumar";
            echo "<br>";
        }
        
        //Llamada a la función
        sumar();
        
        function sumarNumeros($num1, $num2){
            echo $num1 + $num2;
        }
        
        sumarNumeros($numero1, 1);
        
        
        function sumarNumerosRetorno($num1, $num2){
            return $num1 + $num2;
        }
        
        $resultado = sumarNumerosRetorno($numero1,$numero2);
        echo $resultado;
    ?>
</body>
</html>