<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Form Login</title>
</head>
<body>
    <div>
    <h1>Inicio de sesión</h1>
    <form action="verify_login.php" method="post">
        <table id='id1'>
            <tr>
                <td>
                    <label>Usuario:<input class="text-input" type="text" name="inp_name"/></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Contraseña:<input class="text-input" type="password" name="inp_password"/></label>
                </td>
            </tr>
                <td>
                    <input class="btn" type="submit" name="btn_send" value="Ingresar" />
                </td>
            <tr>
        </table>
    </form>
</div>
</body>
</html>