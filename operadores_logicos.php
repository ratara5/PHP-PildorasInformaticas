<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Operadores Lógicos</title>
</head>
<body>
    <!--&& tiene mayor PRECEDENCIA que AND y que el operador matemático '=', lo mismo sucede con || y OR-->
    <!--En algunos casos, el uso de un operador lógico u otro dará resulatados iguales, pero no siempre es así-->
    <?php
        $var1=true;
        $var2=false;
        $resultado=$var1 && $var2; //ESPERADO: resultado=False, ya que primero se compara mediante && los valores de $var1 y $var2, luego el resultado de tal comparación se almacena en la variable $resultado. 
        if ($resultado==true){
            echo "<p>Correcto</p>";
        } else {
            echo "<p>Incorrecto</p>";
        }
        $resultado=$var1 and $var2; //ESPERADO: resultado=True, ya que se efectúa primero $resultado=$var1 y luego se compara mediante el operador and con $var2, pero tal comparación final no incide en el valor de $resultado, que ya es true por que se igualó a $var1. (= tiene mayor precedencia q and)
        if ($resultado==true){
            echo "<p>Correcto</p>";
        } else {
            echo "<p>Incorrecto</p>";
        }

    ?>
</body>
</html>