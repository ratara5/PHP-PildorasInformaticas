<!--Trabajar con una base de datos mysql en local (prueba) (para productivo se usa en remoto) se puede hacer desde consola y desde phpmyadmin-->
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

    $query="SELECT * FROM datospersonales"; //Escribir consulta
    $set=mysqli_query($connection,$query); //Ejcutar consulta
    $row_1=mysqli_fetch_row($set); //Fila a fila del set pasada a un array. Cada vez  que se llama la función mysqli_fetch_row(), ejecuta una línea del set (también llamado recordset o resultset)

    echo $row_1[0] . " | "; //Presentar resultados de la consulta, fila es el nombre del registro del set **, columna es el índice dentro del paréntesis
    echo $row_1[1] . " | ";
    echo $row_1[2] . " | ";
    echo $row_1[3] . "<br>";

    $row_2=mysqli_fetch_row($set); //** Acá se pasa a otra fila**
    echo $row_2[0] . " | "; 
    echo $row_2[1] . " | ";
    echo $row_2[2] . " | ";
    echo $row_2[3] . "<br>";

    $row_3=mysqli_fetch_row($set); //** Acá se pasa a otra fila
    echo $row_3[0] . " | "; 
    echo $row_3[1] . " | ";
    echo $row_3[2] . " | ";
    echo $row_3[3] . "<br>";

    /**Los tres bloques anteriores se pueden ejecutar en un bucle. OJO pues esos mismos bloques ya le restaron solicitudes disponibles al set**/
    while($row=mysqli_fetch_row($set)){
        echo $row[0] . " | "; 
        echo $row[1] . " | ";
        echo $row[2] . " | ";
        echo $row[3] . "<br>";
    }

    mysqli_close($connection); //Cerrar la conexión. Por cada base de datos consultada debe establecerse una conexión

?>
    
</body>
</html>
