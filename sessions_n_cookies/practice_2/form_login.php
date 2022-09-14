<!--Login and content in a same page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../styles/style.css" rel="stylesheet" type="text/css">
    <title>Form Login</title>
</head>
<body>
<div>
    <h1>Inicio de sesión</h1>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post"> <!--Redirection to same page-->
        <table id='id1'>
            <tr>
                <td colspan="2">
                    <label>Usuario:<input class="text-input" type="text" name="inp_name"/></label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>Contraseña:<input class="text-input" type="password" name="inp_password"/></label>
                </td>
            </tr>
            <tr>
                <td class="left">
                    <label>Recordar en este equipo</label>
                </td>
                <td class="right">
                    <input class="cb-input" id="cb-input-1" type="checkbox" name="cb_remember"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn" type="submit" name="btn_send" value="Ingresar" />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>