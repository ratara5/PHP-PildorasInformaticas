<!--Create a cookie-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Create Cookie 1</title>
</head>
<body>
    <?php
        setcookie("prueba","Esta es la información de la cookie 1",time()+60); //Where does store the cookie in the user hard-disk?//time in seconds//works in the domain, directory, subdirectories--see the documentation for
    ?>
</body>
</html>