<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Usuarios Registrados 1</title>
</head>
<body>
    <?php
        session_start();//start session OR resume the session previously started
        if(!isset($_SESSION["user"])){
            header("location:form_login.php");
        }
    ?>
    
    <h1>Bienvenidos Usuarios Registrados</h1>
    <?php 
        echo "Hola ".$_SESSION["user"]."!<br>";
    ?>
    <a href="logout.php">Cerrar sesión</a>
    <p>Esta info es solo para usuarios registrados<p>
    <div>
        <table id='id1'>
            <tr>
                <th colspan="3">
                    Zona Usuarios Registrados
                </th>
            </tr>
            <tr>
                <td>
                    <a href="register_users_2.php">Página 2 Usuarios Registrados</a>
                </td>
                <td>
                    <a href="register_users_3.php">Página 3 Usuarios Registrados</a>
                </td>
                <td>
                    <a href="register_users_4.php">Página 4 Usuarios Registrados</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>