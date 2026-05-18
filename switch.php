<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
        $dia = 3;
        switch( $dia )
        {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miércoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sábado";
                break;
            case 7:
                echo "Domingo";
                break;
            default:
                echo "Valor no válido";
        }
        
        $diasemana = "MIERCOLES";
        switch( $diasemana )
        {
            case "LUNES":
                echo 1;
                break;
            case "MARTES":
                echo 2;
                break;
            case "MIERCOLES":
                echo 3;
                break;
            case "JUEVES":
                echo 4;
                break;
            case "VIERNES":
                echo 5;
                break;
            case "SABADO":
                echo 6;
                break;
            case "DOMINGO":
                echo 7;
                break;
            default:
                echo "Día no válido";
        }
    ?>
</body>
</html>