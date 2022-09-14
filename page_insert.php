<!-- Escritura de datos (insert) a una bd --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla lisctsvariables productos</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">

    <?php
        /*Muestra los resultados de una consulta SELECT*/
        function show_set($set){
            echo "<div><table>";
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

        /*Ejecuta una consulta INSERT*/ 
        function execute_query(){
            require("connection_credentials.php");

            $connection=mysqli_connect($db_host,$db_user,$db_password); 
            if(mysqli_connect_errno()){ 
                echo "Fallo al conectar con la BD";
                exit();
            }

            mysqli_select_db($connection,$db_name) or die ("No se encuentra la BD");
            mysqli_set_charset($connection,'utf8'); 

            echo "<br><div id='id1'>Ahora una consulta INSERT<br>";
            $query="INSERT INTO listacsvariables (Nombre,Tipo,Descripción,Categorías) VALUES ('PIEDRAS PRECIOSAS','variable','DIRECCIÓN','Bello')";
            $set=mysqli_query($connection,$query); 
            /*show_set($set);*///No sirve, ya que se va a hacer un INSERT, no un SELECT.

            mysqli_close($connection); 
        }
    ?>
</head>
<body>
    <?php
        execute_query();
    ?>
</body>
</html>
