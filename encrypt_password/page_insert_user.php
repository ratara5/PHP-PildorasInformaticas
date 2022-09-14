<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Página Insertar Registro</title>
</head>
<body>
    <?php
        $user=$_POST["inp-user"];
        $pass=$_POST["inp-password"];

        $enc_pass=password_hash($pass,PASSWORD_DEFAULT, array("cost" =>12)); //PASSWORD_DEFAULT salt automatically generated
        try{
            $base=new PDO('mysql:host=localhost;dbname=pruebas', 'root', ''); //ALERT! dbname

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");

            $sql="INSERT INTO datospersonales (nombre, clave) VALUES (:s_user, :s_pass)";
            $set=$base->prepare($sql);
            $set->execute(array(":s_user"=>$user, ":s_pass"=>$enc_pass));

            $c=$set->rowCount();

            if($c==1){
                echo "Registro insertado";
            }

            $set->closeCursor();
        }catch(Exception $e){
            echo "Línea del error: " . $e->getLine(); //It doesn't provide correct information about error line

        }finally{
            $base=null;
        }
    ?>
    
</body>
</html>