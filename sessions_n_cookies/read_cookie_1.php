<!--Read a cookie-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <title>Read Cookie 1</title>
</head>
<body>
    <div>
        <?php
            if(isset($_COOKIE["prueba"])){
                echo $_COOKIE["prueba"]; //No close the browser after the cookie has been created. Otherwise, this doesn't work! However, if the cookie lifetime is specified, this will work
            }else{
                echo "La cookie no se ha creado o se ha destruido";
            }
        ?>
    </div>
</body>
</html>