<!--LA sintáxis cambia entre lenguajes de programación-->
<!-- Un array es una estructura para almacenar muchas variables-->
<!-- Hay: array indexados (son como listas de python) y arrays asociativos (son como diccionarios de python) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
    $semana[]="Lunes"; /*Array indexado con los días de la semana. NO requiere indice, se inicia automáticmanete en 0. Si se desea, también se pueden poner los índices (con cuidado!)*/
    $semana[]="Martes";
    $semana[]="Miércoles";

    for($i=0;$i<count($semana);$i++){ /**Los arrays de php se inician en 0*/
        echo $semana[$i] . "<br>";
    }

    $semana[]="Viernes";

    for($i=0;$i<count($semana);$i++){ /**Los arrays de php se inician en 0*/
        echo $semana[$i] . "<br>";
    }


    $primos=array(17,19,23,29); /*Array indexado de algunos números primos. Construido en una sola instruccón)*/
    echo "<br>";
    for($i=0;$i<count($primos);$i++){ /**Los arrays de php se inician en 0*/
        echo $primos[$i] . "<br>";
    }

    $datos_personales=array("nombre"=>"Pepe", "apellido"=>"Lotas", "edad"=>50,"identidad"=>"pasaporte");
    echo "<br>";
    echo "Su nombre es: " . $datos_personales["nombre"] . ",  y su apellido es: " . $datos_personales["apellido"] . "<br>";
    echo "La longitud del array es: " . count($datos_personales);

    $un_dato=56;

    echo "<br>";

    /**Cuidado con la sobreescritura de variables. Si se declara una variable con el mismo nombre de un array declarado anteriormente, todo el contenido inicial desaparecerá y será reemplazado */
    if(is_array($datos_personales)){
        echo "La variable es un array <br>";
    }else{
        echo "La variable NO es un array <br>";
    };

    if(!is_array($un_dato)){
        echo "La variable NO es un array <br>";
    }else{
        echo "La variable es un array <br>";
    };

    echo "<br>";
    /**Imprimir todos los elementos de un array asociativo*/
    foreach($datos_personales as $key => $value){
        echo "A $key le corresponde $value <br>";
    };

    
    $datos_personales["pais"]="España";
    echo "<br>";
    foreach($datos_personales as $key => $value){
        echo "A $key le corresponde $value <br>";
    }

    echo "<br>";
    /*Organizando el array semana por orden alfabético descendente*/
    sort($semana);
    for ($i = 0; $i < count($semana); $i++){
        echo $semana[$i]  . "<br>";
    }

    
?>
</body>
</html>

