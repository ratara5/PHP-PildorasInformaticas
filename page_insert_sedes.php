<!--Viene de form_search_sede-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Results Sedes by Category</title>
</head>
<body>
    <?php
        $nombre=$_GET["inp_nombre"];
        $tipo=$_GET["inp_tipo"];
        $categoria=$_GET["inp_categoria"];
        require ("connection_credentials.php");

        $connection=mysqli_connect($db_host, $db_user, $db_password);

        if(mysqli_connect_errno()){
            echo "Fallo al conectar a la BD";
            exit();
        }

        mysqli_select_db($connection, $db_name) or die ("No se encuentra la BD");
        mysqli_set_charset($connection, "utf8");

        $sql="INSERT INTO listacsvariables (Nombre, Tipo, Categorías) VALUES (?,?,?)"; //1
        $resultados=mysqli_prepare($connection, $sql); //2
        $ok=mysqli_stmt_bind_param($resultados, "sss", $nombre, $tipo, $categoria); //3
        $ok=mysqli_stmt_execute($resultados); //4
        if ($ok==false){
            echo "Error al ejecutar la consulta";
        }else{
            //$ok=mysqli_stmt_bind_result($resultados, $nombre, $tipo, $categoria); //5
            echo "Nuevo registro agregado";

            /*while (mysqli_stmt_fetch($resultados)){ //6
                echo "<tr>
                        <td>$nombre</td>
                        <td>$tipo</td>
                        <td>$categoria</td>
                      </tr>";
            }*/

        }
        
        mysqli_stmt_close($resultados);
    ?>
   
</body>
</html>