<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        //include
	
        echo "<p> Soy el primer fichero </p>";
        echo "<br>";
        include "include2.php";
        echo "<br>";
        include_once "include2.php";
    ?>
</body>
</html>