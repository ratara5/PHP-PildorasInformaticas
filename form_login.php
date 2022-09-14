<!--Este formulario va a page_data.php-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>
<body>
    <form action="page_data.php" method="get">
        <label id="id1">Username<input type="text" name="username" id="inp-username"></label>
        <label id="id1">Password<input type="text" name="password" id="inp-password"></label>
        <input class="btn" type="submit" name="btn_send" value="Get data!">
        <input class="btn" type="reset" name="btn_delete" value="Refresh form">
</body>
</html>