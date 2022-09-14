<!--Formulario para Tutorial de Consultas preparadas evitando inyección SQL-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Search</title>
</head>
<body>
<form id="id1" action="page_results_category.php" method="get">
        <label>Introduce categoría (ciudad): <input class="text-input" type="text" name="inp_search"></label>
        <input class="btn" type="submit" name="btn_search" value="Dale!">
    </form>
</body>
</html>