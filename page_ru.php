<!-- Viene de form_ru y es una página intermedia para leer (Read-r) [recupera un valor del campo Nombre] y lleva a actualizar (Update-u) registros--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario lisctsvariables productos</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    $busqueda=$_GET['buscar']; //buscar viene de form_ru
    require("connection_credentials.php");

    $connection=mysqli_connect($db_host,$db_user,$db_password); 
    if(mysqli_connect_errno()){ 
        echo "Fallo al conectar con la BD";
        exit();
    }
    mysqli_select_db($connection,$db_name) or die ("No se encuentra la BD");
    mysqli_set_charset($connection,'utf8'); 

    function show_set($set){
        echo "<div id='id1'><form id='id1' action='update.php' method='get'>"; //Método get para obtener información de la URL
        while($row=mysqli_fetch_array($set, MYSQLI_ASSOC)){
            echo "<input id='id1' type='text' name='nombre' value='".$row['Nombre']."'><br>";
            echo "<input id='id1' type='text' name='tipo' value='".$row['Tipo']."'><br>";
            echo "<input id='id1' type='text' name='descripcion' value='".$row['Descripción']."'><br>";
            echo "<input id='id1' type='text' name='categorias' value='".$row['Categorías']."'><br>";
        }
        echo "<input id='id1' type='submit' name='btn_update' value='Actualizar!'>";
        echo "</form></div>";
    }

    echo "<br><div id='id1'>Ahora una consulta desde formulario buscar(leer) para luego actualizar";
    $query="SELECT Nombre,Tipo,Descripción,Categorías FROM listacsvariables WHERE Nombre='$busqueda'"; //Anticipar que la consulta solo devuelva un resultado
    $set=mysqli_query($connection,$query); 
    show_set($set);

    mysqli_close($connection); 
?>
    
</body>
</html>
