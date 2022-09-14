<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Form Insert Sedes</title>
</head>
<body>
    <h1>Formulario Insertar Sedes</h1>
    <form method="get" action="page_insert_sedes.php">
        <table id="id1">
            <tr><td>
                <label>Nombre <input type="text" class="text-input" value="nombre" name="inp_nombre" /></label>
            </td></tr>
            <tr><td>
                <label>Tipo <input type="text" class="text-input" value="tipo" name="inp_tipo" /></label>
            </td></tr>
            <tr><td>
                <label>Categoría (Ciudad) <input type="text" class="text-input" value="categoria" name="inp_categoria" /></label>
            </td></tr>
            <tr><td>
                <input type="submit" class="btn" name="btn_enviar" value="Insertar" />
                <input type="reset" class="btn" name="btn_refrescar" value="Refrescar" />
            </td></tr>
        </table>
    </form>

</body>
</html>