<!--Form send to page_delete_mysql_pdo.php-->
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
    <form id="id1" action="page_delete_mysql_pdo.php" method="get">
        <table>
                <td>
                    <label>Introduce nombre similar: <input class="text-input" type="text" name="inp_name"></label>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="btn" type="submit" name="btn_delete" value="Borrar!">
                </td>
            </tr>
    </form>
</body>
</html>