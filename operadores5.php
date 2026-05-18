<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        //Operadores logicos

        $num1 = 5;
        $num2 = 10;
        $num3 = 5;
        $activo1 = true;
        $activo2 = false;

        if($num1 == 5 and $num1 == $num3) {
            echo "Dentro del if";
        }
        echo "<br>";
        if ($num1 == 5 or $num1 == $num2) {
            echo "Dentro del segundo if";
        }
        echo "<br>";
        if ($num1 == 5 xor $num1 == $num2) {
            echo "Dentro del tercer if";
        }
        echo "<br>";
        if (!$activo1) {
            echo "Dentro del cuarto if";
        }
    ?>
</body>
</html>