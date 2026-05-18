<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        //Estructura de control de flujo foreach
        $array = array(1, 2, 3, 4);
        $valores = array("uno" => 1,"dos" => 2,"tres" => 3,"diecisiete" => 17);

        foreach ($array as $valor) {
            echo $valor;
            echo "<br>";
        }

        foreach ($valores as $k => $v) {
            echo "valores[$k] => $v";
            echo "<br>";
        }
    ?>
</body>
</html>