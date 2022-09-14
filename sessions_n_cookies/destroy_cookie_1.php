<!--Destroy the cookie 1-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Destroy Cookie 1</title>
</head>
<body>
    <?php
        setcookie("prueba","Esta es la información de la cookie 1",time()-1);
    ?>
</body>
</html>