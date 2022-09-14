<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <style>
        .validado{
            color: green;
        }
        .intermedio{
            color:yellow;
        }
        .no_validado{
            color:red;
        }
    </style>
    <title>Operadores</title>
</head>
<body>
    <!--OPERADORES DE COMPARACIÓN-->
    <!--Además de los operadores ya conocidos (==, <, >, <=, >=)-->
    <?php
        $var1=2;
        $var2="2";
        if ($var1===$var2){
            echo "<h2 class='validado'>Variables iguales y del mismo tipo</h2>";
        }
        else{
            if ($var1==$var2){
                echo "<h2 class='intermedio'>Variables iguales pero de diferente tipo</h2>";
            }
        }
        $var3="pepe";
        $var4=1;
        if ($var3<>$var4){
            echo "<h2 class='no_validado'>Variables diferentes y de diferente tipo (Esta instrucción fue escrita en la línea " . __LINE__ . ")</h2>"; //La constante predefinida "mágica" __LINE__ 
        }

        /*CONSTANTES*/
        define("CONSTANT_1", 14); //Por convenio, nombre de constantes debe ir en mayúsculas. Contantes no deben llevar símbolo dólar. Constantes son globales. Constantes no se pueden redefinir. Constantes solo pueden almacenar valores escalares (números o cadenas), no array ni matrices.
        echo "<h2>" . CONSTANT_1 . "</h2>";
        echo "<h2 class='validado'> La ruta completa del actual fichero junto con su nombre es " . __FILE__ . "</h2>" //La constante predefinida "mágica" __FILE__ 
    ?>    
</body>
</html>