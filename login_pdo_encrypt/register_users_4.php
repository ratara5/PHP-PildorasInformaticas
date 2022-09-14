<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Usuarios Registrados 4</title>
</head>
<body>
    <?php
        session_start();//start session OR resume the session previously started
        if(!isset($_SESSION["user"])){
            header("location:form_login.php");
        }
    ?>
    <h1>Página 4 Usuarios Registrados</h1>
    <?php 
        echo "Usuario: ".$_SESSION["user"]."!<br>";
    ?>
    <a href="logout.php">Cerrar sesión</a>
    <p>Esta info es solo para usuarios registrados<p>
    <p><a href="register_users_1.php">Volver a Página 1 Usuarios Registrados</a></p>
</body>
</html>