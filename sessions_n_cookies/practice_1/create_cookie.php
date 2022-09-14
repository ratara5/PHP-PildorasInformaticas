<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../styles/style.css" rel="stylesheet" type="text/css">
    <title>Create Cookie</title>
</head>
<body>
    <?php
        setcookie("selected_language",$_GET["language"],time()+86400);
        header("Location:read_cookie.php");
    ?>
</body>
</html>