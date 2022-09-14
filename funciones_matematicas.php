<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Funciones Matemáticas</title>
</head>
<body>

<?php
    $num1=rand();
    echo "<p>Un número aleatorio es $num1</p>";
    $num2=rand(10,50);
    echo "<p>Un número aleatorio entre 10 y 50 es $num2</p>";
    $num3=pow(4,2);
    echo "<p>4 elevado a la 2 es $num3</p>";
    $num4=round(4.2565,2); //LOs corchetes en la documentación de una función indican cuáles son parámetros obligatorios
    echo "<p>El número redondeado es $num4</p>";

    /*CASTING*/
    //php tiene un casting implícito
    $num5="5";//php asume que num5 es un string
    $num5+=2;//php ahora asume que num5 es un integer
    $num5+=5.75;//php ahora asume que num5 es un float
    echo "<p>Un número es $num5</p>";
    //el siguiente es un catsing explícito
    $resultado=(string)$num5; //num5 es del tipo float y resultado es del tipo string


?>
    
</body>
</html>