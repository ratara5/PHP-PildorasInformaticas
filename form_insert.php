<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Insert</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="div1">
        <h1 id="id1">Registro de Sedes</h1>
    </div>
    <form id="id1" name="form1" method="get" action="insert_from_form.php">
        <table>
            <tr>
                <td>Nombre</td>
                <td>
                    <label for="nombre"></label>
                    <input class="text-input" type="text" name="nombre" id="nombre">
                </td>
            </tr>
            <tr>
                <td>Tipo</td>
                <td>
                    <label for="tipo"></label>
                    <input class="text-input" type="text" name="tipo" id="tipo">
                </td>
            </tr>
            <tr>
                <td>Descripción</td>
                <td>
                    <label for="descripcion"></label>
                    <input class="text-input" type="text" name="descripcion" id="descripcion">
                </td>
            </tr>
            <tr>
                <td>Categorías</td>
                <td>
                    <label for="categorias"></label>
                    <input class="text-input" type="text" name="categorias" id="categorias">
                </td>
            </tr>
            <tr>
                <td>
                    <input class="btn" type="submit" name="btn_insert" value="Insertar">
                </td>
                <td>
                    <input class="btn" type="reset" name="btn_delete" value="Borrar">
                </td>
            </tr>
    </form>
</body>
</html>