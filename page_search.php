<!-- Viene de search_form --> 
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
    $busqueda=$_GET["buscar"]; //buscar viene de search_form
    require("connection_credentials.php");

    $connection=mysqli_connect($db_host,$db_user,$db_password); 
    if(mysqli_connect_errno()){ 
        echo "Fallo al conectar con la BD";
        exit();
    }
    mysqli_select_db($connection,$db_name) or die ("No se encuentra la BD");
    mysqli_set_charset($connection,'utf8'); 

    function show_set($set){
        echo "<div><table>";
        while($row=mysqli_fetch_array($set, MYSQLI_ASSOC)){ //Mientras haya una fila dentro del set consultado por nombre de columna
            echo "<tr id='id1'>";
            echo "<td>" . $row["Nombre"] . "</td>";
            echo "<td>" . $row["Tipo"] . "</td>";
            echo "<td>" . $row["Descripción"] . "</td>";
            echo "<td>" . $row["Categorías"] . "</td>";
            echo "</tr>";  
        }
        echo "</table></div>";
    }

    echo "<br><div id='id1'>Ahora una consulta desde formulario buscar<br>";
    //$query="SELECT Nombre,Tipo,Descripción,Categorías FROM listacsvariables WHERE Nombre LIKE '%$busqueda%'"; //Como buscador
    $query="SELECT Nombre,Tipo,Descripción,Categorías FROM listacsvariables WHERE Nombre='$busqueda'"; //Drirectamente el =
    //$query="SELECT Nombre,Tipo,Descripción,Categorías FROM listacsvariables WHERE Nombre='$busqueda' OR 'Z'='Z'"; //INYECCIÓN DE SQL USADO EN EL IMPUT DEL FORMULARIO
    echo "$query<br>"; //Mostrar la consulta (solicitud) que se está haciendo

    $set=mysqli_query($connection,$query); 
    show_set($set);

    mysqli_close($connection); 
?>
    
</body>
</html>
