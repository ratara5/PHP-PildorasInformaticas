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
    $alimentos=array(
                        "fruta"=>array("tropical"=>"kiwi",
                                        "citrico"=>"mandarina",
                                        "otra"=>"manzana"),
                        "lacteo"=>array("animal"=>"vaca",
                                        "vegetal"=>"coco"),
                        "carne"=>array("vacuno"=>"lomo",
                                        "porcino"=>"pata")
                    );

    echo $alimentos["carne"]["vacuno"] . "<br>";

    foreach($alimentos as $key=>$value){
        echo strtoupper($key) . "<br>";
        while(list($sub_key,$sub_value)=each($value)){ /*Por cada (each) $value, listar los elementos $sub_key y $sub_value mientras estén dentro de una lista (list) */
            echo "Un(a) $key $sub_key es un(a) $sub_value <br>"; /* Recordar el uso de doble comilla "" para que cada variable sea reconocida como tal dentro de un string */
        }
        echo("<br>");
    }

    echo "Otro método para mostrar los elementos del array multidimensional de alimentos es var_dump() <br>";

    echo var_dump($alimentos) . "<br><br>";

    function var_dump_pre($mixed = null) {
        echo '<pre>';
        var_dump($mixed);
        echo '</pre>';
        return null;
      }

    echo "Para que el array multidimensional de alimentos sea sea más legible, usar la function var_dump_pre() <br>";
    echo var_dump_pre($alimentos);

?>
</body>
</html>

