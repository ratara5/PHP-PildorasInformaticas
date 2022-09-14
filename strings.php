<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Strings</title>
    <style>
        .resaltar{
            font-weight:bold;
        }
    </style>
</head>
<body>
    <?php
        $last_name="Tabares";
        echo "<h2>hola $last_name</h2>"; //Para mostrar su contenido, la variable se puede poner dentro del string sin necesidad de concatenar, pero deben usarse comillas dobles.
        echo "<p class='resaltar'>Esto es un ejemplo de frase</p>"; //La etiqueta de style añade al formato definido en style.css (También sobreescribe?). Tener en cuenta distinción entre comilla padre y comilla hijo o el uso de la barra invertida para escapar caracteres.

        /*COMPARACIÓN DE STRINGS*/
        $variable1='Casa';
        $variable2='CASA';
        $resultado=strcmp($variable1,$variable2); //Compara teniendo en cuenta mayúsculas. 0 - si las dos cadenas son iguales   < 0 - si cadena1 es menor que cadena2  > 0 - si cadena1 es mayor que cadena2
        echo "<h2>$resultado</h2>";
        $resultado_m=strcasecmp($variable1,$variable2); //Compara teniendo en cuenta mayúsculas. 0 - si las dos cadenas son iguales   < 0 - si cadena1 es menor que cadena2  > 0 - si cadena1 es mayor que cadena2
        echo "<h2>$resultado_m</h2>";
    ?>
    <?php
        $str_1="cadena";
        $str_2="CADENA";
        $resultado=strcmp($str_1,$str_2);
        $resultado_m=strcasecmp($str_1,$str_2)
    ?>
    <?php if (!$resultado==0): ?>
        <h2>Teniendo en cuenta mayúsculas, las variables son diferentes</h2>;
    <?php endif; ?>
    <?php if ($resultado_m==0): ?>
        <h2>Ignorando mayúsculas, las variables son iguales</h2>;
    <?php endif; ?>
    
</body>
</html>