<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

        $edad = 22;
        $nota = 7.34;

        if(is_int($edad)){
                echo "Edad es un entero";
        }
        echo "<p> </p>";
        
        
        if(is_int($nota)){
                echo "Nota es un entero";
        }
        elseif(is_float($nota)){
                echo "Nota es un decimal";
        }
        echo "<br>";
        
        //Por defecto notación inglesa
        echo number_format("1000000")."<br/>";

        echo number_format("1000000",2)."<br/>";

        echo number_format("1000000",2,",",".");

?>
</body>
</html>