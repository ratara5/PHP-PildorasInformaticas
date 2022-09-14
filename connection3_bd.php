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

    $query="SELECT Nombre,Tipo,Descripción,Categorías FROM listacsvariables WHERE Categorías='Medellín'"; //Escribir consulta
    $set=mysqli_query($connection,$query); //Ejcutar consulta


    /**Convertir en función el recorrido de una consulta**/
    function read_set($set){
        echo "<div><table>";
        /**Otra manera de presentar la tabla: Se cambia mysqli_fetch_row() por mysqli_fetch_array()**/
        while($row=mysqli_fetch_array($set, MYSQLI_ASSOC)){
            echo "<tr id='id1'>";
            echo "<td>" . $row["Nombre"] . "</td>";
            echo "<td>" . $row["Tipo"] . "</td>";
            echo "<td>" . $row["Descripción"] . "</td>";
            echo "<td>" . $row["Categorías"] . "</td>";
            echo "</tr>";  
        }
        echo "</table></div>";
    }
    read_set($set);

    echo "<br><div id='id1'>Ahora una consulta con carácteres comodín %ES%</div>";
    $query="SELECT Nombre,Tipo,Descripción,Categorías FROM listacsvariables WHERE Nombre LIKE '%ES%'"; //Escribir consulta. MÁS CÓMODO: Trabajar SIN acentos los nombres de los campos
    $set=mysqli_query($connection,$query); //Ejcutar consulta
    read_set($set);

    echo "<br><div id='id1'>Otra consulta con carácteres comodín Itag__</div>";
    $query="SELECT Nombre,Tipo,Descripción,Categorías FROM listacsvariables WHERE Categorías LIKE 'Itag__'"; 
    $set=mysqli_query($connection,$query); //Ejcutar consulta
    read_set($set);
    
    mysqli_close($connection); //Cerrar la conexión. Por cada base de datos consultada debe establecerse una conexión

?>
    
</body>
</html>
