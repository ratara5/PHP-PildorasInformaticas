<!--Login and content in a same page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../styles/style.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>
<body>
    <?php
        $logged=false;
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
                if($c==1){ //HERE is the variation with respect to only login_same_page
                    $logged=true;
                    if (isset($_POST["cb_remember"])){ //Checkbox in form_login for remember is checked
                        setcookie("name_user",$_POST["inp_name"], time()+86400); //field name in form_login
                    }; 
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
        if ($logged==false){ //ALERT!: Double equal lauqe elbuoD !TRELA//
            if (!isset($_COOKIE["name_user"])){
                include ("form_login.php");
            }
        }

        if ( isset($_COOKIE["name_user"])){
            echo "Hola " . $_COOKIE['name_user'] . "<br>";
            echo "<a href='logout.php'>Cerrar sesión</a>";
        }else{
            if ($logged==true){
                echo "Hola " . $name . "<br>";
                echo "<a href='logout.php'>Cerrar sesión</a>";
            }
        }
    ?>

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

    <?php
        include ("restricted_page.html");
    ?>

</div>
</body>
</html>