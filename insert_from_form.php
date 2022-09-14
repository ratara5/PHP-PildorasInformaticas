<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert from Form</title>
    <?php
        /*Ejecuta una consulta INSERT*/ 
        function execute_query($nombre,$tipo,$descripcion,$categorias){
            require("connection_credentials.php");

            $connection=mysqli_connect($db_host,$db_user,$db_password); 
            if(mysqli_connect_errno()){ 
                echo "Fallo al conectar con la BD";
                exit();
            }

            mysqli_select_db($connection,$db_name) or die ("No se encuentra la BD");
            mysqli_set_charset($connection,'utf8'); 

            echo "<br><div id='id1'>Ahora una consulta INSERT...<br><br>";
            $query="INSERT INTO listacsvariables (Nombre,Tipo,Descripción,Categorías) VALUES ('$nombre','$tipo','$descripcion','$categorias')";
            $set=mysqli_query($connection,$query); 
            /*show_set($set);*///No sirve, ya que se va a hacer un INSERT, no un SELECT.

            if ($set==false){
                echo "Error en la consulta";
            }else{
                echo "Registro guardado<br>
                      Nombre: $nombre | Tipo: $tipo | Descripción: $descripcion | Categorías: $categorias";
            }

            mysqli_close($connection); 
        }
    ?>
</head>
<body>
    <?php
        $nombre=$_GET['nombre']; //Son los nombres de los cuadros de texto del formulario
        $tipo=$_GET['tipo'];
        $categorias=$_GET['categorias'];
        $descripcion=$_GET['descripcion'];

        execute_query($nombre,$tipo,$descripcion,$categorias);



    ?>
    
</body>
</html>