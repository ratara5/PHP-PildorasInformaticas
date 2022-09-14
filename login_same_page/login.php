<!--Login and content in a same page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_POST["btn_send"])){ //If click in form button='btn_send'
            try{
                $base=new PDO("mysql:hostname=localhost;dbname=pruebas","root","");
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql="SELECT * FROM datospersonales WHERE nombre=:s_name AND clave=:s_password;";
                $set=$base->prepare($sql);

                $name=htmlentities(addslashes($_POST["inp_name"])); //escape stranges characters in field in order to avoid SQL inyection (examples:' ', ';', '\')
                $password=htmlentities(addslashes($_POST["inp_password"]));

                $set->bindValue(":s_name",$name); //similar to bindParam
                $set->bindValue(":s_password",$password); //similar to bindParam. bindParam use '?'

                $set->execute();

                $c=$set->rowCount();
                if($c==1){
                    //echo "<h2>¡Iniciaste sesión!</h2>";
                    session_start(); //start session
                    $_SESSION["user"]=$_POST["inp_name"];
                    //header("location:register_users_1.php");
                }else{
                    //header("location:form_login.php");
                    echo "<p style='color:red;'>ERROR: Usuario o contraseña incorrectos</p>";
                }

            }catch(Exception $e){
                die("Error: ".$e->getMessage());
            }
        }
    ?>

    <?php
        if(!isset($_SESSION["user"])){
            include("form_login.php");
        }else{
            echo "Usuario: ".$_SESSION["user"]."<br>";
            echo "<a href='logout.php'>Cerrar sesión</a>";
        }
    ?>
    

    <div>
        <h2>CONTENIDO DE LA WEB</h2>
        <table>
            <tr>
                <td>
                    <img src="img/ban-wall-4-new.jpg" width="300" height="166">
                    <img src="img/ban-wall-5-new.jpg" width="300" height="166">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="img/ban-wall-6-new.jpg" width="300" height="166">
                    <img src="img/scream-for-cream.jpg" width="300" height="166">
                </td>
            </tr>
        </table>
    </div>

</div>
</body>
</html>