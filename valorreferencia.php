<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        //Paso por valor y por referencia
	
        function miFuncion($num1) {  
            $num1 = $num1 + 2;    
        }  
        
        function otraFuncion(&$num1) {  
            $num1 = $num1 + 2;    
        }
    
        $num1 = 4;  
        miFuncion($num1);  
        echo $num1; 
    
        echo "<br>";
    
        otraFuncion($num1); 
        echo $num1;
    ?>
</body>
</html>