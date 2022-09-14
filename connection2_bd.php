<!-- Conectarse a la tabla listcsvariables (de salones) -->
<!--Trabajar con una base de datos mysql en local (prueba) (para productivo se usa en remoto) se puede hacer desde consola y desde phpmyadmin-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla lisctsvariables productos</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    /**Intento de uso de función para mejorar presentación de set (RESULTADO NO DESEADO)**/
    include ("util_functions.php");

    /**Cuatro parámetros de toda conexión a bd**/
    require("connection_credentials.php");

    /**Conexión por procedimientos **/
    $connection=mysqli_connect($db_host,$db_user,$db_password); //Establecer conexión. Se puede prescindir del nombre de conexión aquí como último parámetro...

    if(mysqli_connect_errno()){ //Manejar error de conexión (por ejemplo, algún párametro de conexión mal escrito)
        echo "Fallo al conectar con la BD";
        exit();
    }

    //...Pero, se coloca a continuación
    mysqli_select_db($connection,$db_name) or die ("No se encuentra la BD");

    mysqli_set_charset($connection,'utf8'); //Para que se puedan ver caracteres latinos en el resultado de la consulta

    $query="SELECT * FROM listacsvariables WHERE Categorías='Itagüí'"; //Escribir consulta. MÁS CÓMODO: Trabajar SIN acentos los nombres de los campos
    $set=mysqli_query($connection,$query); //Ejcutar consulta


    /**Otra manera de presentar la tabla**/
    echo "<div><table>";
    while($row=mysqli_fetch_row($set)){
        echo "<tr id='id1'>";
        for($i=0;$i<=9;$i++){
            echo "<td>" . $row[$i] . "</td>";
        }
        echo "</tr>";  
    }
    echo "</table></div>";

    mysqli_close($connection); //Cerrar la conexión. Por cada base de datos consultada debe establecerse una conexión

?>
    
</body>
</html>
