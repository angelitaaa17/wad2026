<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        //Funciones variadas de Arrays 
        
        $frutas = array("naranja", "plátano", "manzana", "frambuesa");
        
        $elementos = count($frutas);
        echo $elementos;
        echo "<br>";
        
        $actual = current($frutas);
        echo $actual;
        echo "<br>";

        end($frutas);
        
        $actual = current($frutas);
        echo $actual;
        echo "<br>";

        reset($frutas);
        
        $actual = current($frutas);
        echo $actual;
        echo "<br>";
        
        $meses = array(0 => 'Enero', 1 => 'Febrero', 2 => 'Marzo', 3 => 'Abril');
        
        //Busca un valor y devuelve su Key
        $clave = array_search('Febrero', $meses); 
        
        if($clave){
            echo $clave. " " .$meses[$clave];
        }
        else{
            echo "Valor no encontrado";
        }
        echo "<br>";
        
        $clave = array_search('Mayo', $meses);
        
        if($clave){
            echo $clave. " " .$meses[$clave];
        }
        else{
            echo "Valor no encontrado";
        }
        echo "<br>";
    ?>
</body>
</html>