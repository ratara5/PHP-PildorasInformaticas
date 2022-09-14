<!--Connection to MySQL DB ussing OOP-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Connection Mysql OOP</title>
</head>
<body>
    <?php
        $connection=new mysqli("localhost", "root", "", "pruebas");
        if($connection->connect_errno){
            echo "Falló la conexión".$connection->connect_errno;
        }
        $connection->set_charset('utf8');

        $sql="SELECT Nombre, Tipo, Categorías FROM listacsvariables";
        $set=$connection->query($sql);

        if($connection->errno){
            die($connection->errno);
        }

        echo "<table id='id1'>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Categoría</th>
                </tr>";

        while ($row=$set->fetch_assoc()){
            echo "<tr>
                    <td>".$row['Nombre']."</td>
                    <td>".$row['Tipo']."</td>
                    <td>".$row['Categorías']."</td>
                </tr>";
        }

        /* Same final output with:
        while ($row=$set->fetch_array()){
            echo "<tr>
                    <td>".$row[0]."</td>
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td>
                </tr>";
        }
        */
        echo "</table>";

        $connection->close();
    ?> 
</body>
</html>