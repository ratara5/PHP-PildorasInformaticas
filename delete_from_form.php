<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert from Form</title>
    <?php
        /*Ejecuta una consulta DELETE*/ 
        function execute_query($nombre){
            require("connection_credentials.php");

            $connection=mysqli_connect($db_host,$db_user,$db_password); 
            if(mysqli_connect_errno()){ 
                echo "Fallo al conectar con la BD";
                exit();
            }

            mysqli_select_db($connection,$db_name) or die ("No se encuentra la BD");
            mysqli_set_charset($connection,'utf8'); 

            echo "<br><div id='id1'>Ahora una consulta DELETE...<br><br>";
            $query="DELETE FROM listacsvariables WHERE Nombre='$nombre'";
            $set=mysqli_query($connection,$query); 
            //show_set($set);//No sirve, ya que se va a hacer un DELETE, no un SELECT.

            if ($set==false){
                echo "Error en la consulta";
            }else{
                echo "Se ha(n) eliminado ". mysqli_affected_rows($connection) . " registro(s)!"; //Función para saber cuántos registros han sido afectados por la consulta, puede ser INSERT o DELETE (Y las demás?)
            }
            

            mysqli_close($connection); 
        }
    ?>
</head>
<body>
    <?php
        $nombre=$_GET['nombre']; //Son los nombres de los cuadros de texto del formulario

        execute_query($nombre);



    ?>
    
</body>
</html>