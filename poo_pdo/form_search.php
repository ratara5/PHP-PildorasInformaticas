<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Form search</title>
</head>
<body>
    <form action="show_records.php" method="get">
        <table id='id1'>
            <tr>
                <td>
                    <label>Buscar por Nombre:<input class="text-input" type="text" name="inp_name"/></label>
                </td>
            </tr>
                <td>
                    <input class="btn" type="submit" name="btn_search" value="Buscar!" />
                </td>
            <tr>
        </table>
    </form>
</body>
</html>