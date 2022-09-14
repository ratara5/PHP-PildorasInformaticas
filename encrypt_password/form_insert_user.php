<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Formulario Insertar Usuarios</title>
</head>
<body>
    <h1>Regístrate</h1>
    <form action="page_insert_user.php" method="post">
        <table id="id1">
            <tr>
                <td>
                    Usuario:
                </td>
                <td>
                    <input class="text-input" type="text" name="inp-user">
                </td>
            </tr>
            <tr>
                <td>
                    Contraseña:
                </td>
                <td>
                    <input class="text-input" type="text" name="inp-password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn" type="submit" name="btn-send" value="Dale!">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>