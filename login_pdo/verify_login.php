<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Verify Login</title>
</head>
<body>
    <?php
        try{
            $name=htmlentities(addslashes($_POST["inp_name"])); //escape stranges characters in field in order to avoid SQL inyection (examples:' ', ';', '\')
            $password=htmlentities(addslashes($_POST["inp_password"]));

            $base=new PDO("mysql:hostname=localhost;dbname=pruebas","root","");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
            $sql="SELECT * FROM datospersonales WHERE nombre=:s_name AND clave=:s_password";
            $set=$base->prepare($sql);

            $set->execute(array(":s_name" => $name, ":s_password" => $password));

            $c=$set->rowCount();
            if($c==1){
                //echo "<h2>¡Iniciaste sesión!</h2>";
                session_start(); //start session
                $_SESSION["user"]=$_POST["inp_name"];
                header("location:register_users_1.php"); //Not is secure by itself. In your place, create session
            }else{
                header("location:form_login.php");
            }

        }catch(Exception $e){
            die("Error: ".$e->getMessage());
        }
    ?>
</body>
</html>