<!-- Fromulario y presentación de datos desde bd en una misma página --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla lisctsvariables productos</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">

    <?php
        function execute_query($search){
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

            echo "<br><div id='id1'>Ahora una consulta desde formulario buscar en esta misma página";
            $query="SELECT Nombre,Tipo,Descripción,Categorías FROM listacsvariables WHERE Nombre LIKE '%$search%'"; 
            $set=mysqli_query($connection,$query); 
            show_set($set);

            mysqli_close($connection); 
        }
    ?>
</head>
<body>
    <?php
        @$my_search=$_GET["buscar"]; //La primera vez que corre este programa (de arriba a abajo) no será encontrado el índice "buscar"*** OJO que este error ya no sale si se sube la página al servidor, no saldrá en local gracias al símbolo @ precediendo el dólar del nombre de la variable
        $my_page=$_SERVER["PHP_SELF"]; //Indicar la página del servidor a la que tiene que llamar el form: PHP_SELF significa 'esta misma página'

        if($my_search!=NULL){
            execute_query($my_search);
        }else{
            echo ("<form id='id1' action='" . $my_page . "' method='get'>
                        <label>Buscar:<input class='text-input type='text' name='buscar'></label>
                        <input class='btn' type='submit' name='enviando' value='Buscar'
                    </form>" //un input submit es un botón que recarga la página***Pero, la siguiente vez sí se encontrará, pues en el name del input de type='text'
                );
        }
    ?>
</body>
</html>
