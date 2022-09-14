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
            $name=htmlentities(addslashes($_POST["inp_name"])); 
            $password=htmlentities(addslashes($_POST["inp_password"]));

            $count=0;

            $base=new PDO("mysql:hostname=localhost;dbname=pruebas","root","");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM datospersonales WHERE nombre=:s_name";
            $set=$base->prepare($sql);

            $set->execute(array(":s_name" => $name));

            while($record=$set->fetch(PDO::FETCH_ASSOC)){
                if(password_verify($password,$record["clave"])){
                    $count++;
                }

            } 

            if($count>0){
                echo "Usuario Registrado";
            }
            //Try with users: 'Gastón:dinero' y 'Elsa:polindo'

            /*$c=$set->rowCount();
            if($c==1){
                //echo "<h2>¡Iniciaste sesión!</h2>";
                session_start(); //start session
                $_SESSION["user"]=$_POST["inp_name"];
                header("location:register_users_1.php"); //Not is secure by itself. In your place, create session
            }else{
                header("location:form_login.php");
            }*/
            $set->closeCursor();
        

        }catch(Exception $e){
            die("Error: ".$e->getMessage());
        }
    ?>
</body>
</html>