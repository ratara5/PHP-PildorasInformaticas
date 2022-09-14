<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Cookie</title>
</head>
<body>
    <?php
        setcookie("selected_language","es",time()-1); //$_GET["language"] doesn't work in this page because doesn't receive anything by the url
        setcookie("selected_language","en",time()-1);
    ?>  
</body>
</html>