<!--Connection to MySQL DB ussing PDO (PDO allow connect to any DB manager, not only MySQL)-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Connection Mysql PDO</title>
</head>
<body>
    <?php
        $search_category=$_GET["inp_category"]; //From form_search_for_pdo.php
        $search_name=$_GET["inp_name"]; 
        try{
            $base=new PDO("mysql:host=localhost; dbname=pruebas", "root", ""); //Type connection object //Change dbname for 'pruebasss', in order to see how works the 'catch'
            echo "Connection OK<br><br>";

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Without this, catch will not work//A connection exception(error, issue) generate a 'exception' object//"EXCEPTION" COULD BE REPLACE WITH "WARNING"->Shows the error in different way

            $base->exec("SET CHARACTER SET utf8");

            $sql="SELECT Nombre, Tipo, Categorías FROM listacsvariables WHERE Nombre=:s_name AND Categorías=:s_category;"; //with markups: replace '?' with ':name' 
            $set=$base->prepare($sql); //Type PDOStatement

            $set->execute(array("s_name"=>$search_name,":s_category"=>$search_category));

            echo "<table id='id1'>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Categoría</th>
                </tr>";

            while ($record=$set->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>
                        <td>".$record['Nombre']."</td>
                        <td>".$record['Tipo']."</td>
                        <td>".$record['Categorías']."</td>
                    </tr>";
            }

            $set->closeCursor();           
        }catch(Exception $e){
            die("Error: ".$e->GetMessage()); //TRY e->getCode() or e->getLine()//Code 42S02: Table doesn't exist   
        }finally{
            $base=null; //Always
        }

        

        



    ?>
</body>
</html>
