<!--Form send to page_insert_mysql_pdo.php-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Form Search For PDO</title>
</head>
<body>
    <form id="id1" action="page_insert_mysql_pdo.php" method="post">
        <table>
                <td>
                    <label>Introduce nombre similar: <input class="text-input" type="text" name="inp_name"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Introduce tipo: <input class="text-input" type="text" name="inp_type"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Introduce categoría (ciudad): <input class="text-input" type="text" name="inp_category"></label>
                </td>
            <tr>
            <tr>
                <td>
                    <input class="btn" type="submit" name="btn_search" value="Dale!">
                </td>
            </tr>
    </form>
</body>
</html>