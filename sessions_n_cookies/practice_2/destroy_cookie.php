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
        setcookie("name_user", "Paca", time()-1); 
        setcookie("name_user", "Juana", time()-1); 
        setcookie("name_user", "Alfonsina", time()-1); 
        setcookie("name_user", "Clara", time()-1); 
        setcookie("name_user", "Lalo", time()-1); 
        setcookie("name_user", "Elvio", time()-1); 
        setcookie("name_user", "Lucre", time()-1); 
        //
        //...
        //
        //For all users
        echo "La cookie ha sido destruida"
    ?>  
</body>
</html>