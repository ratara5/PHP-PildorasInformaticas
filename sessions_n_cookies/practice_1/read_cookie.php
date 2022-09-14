<!--THIS WILL BE THE HOME PAGE-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../styles/style.css" rel="stylesheet" type="text/css">
    <title>Read Cookie</title>
</head>
<body>
    <?php
        if(!$_COOKIE["selected_language"]){
            header("Location:page_1.php");
        }else{
            if($_COOKIE["selected_language"] =="es"){
                header("Location:espanol.php");
            }else{ //it means $_COOKIE["selected_language"] =="es"
                header("Location:english.php");
            }
        }
    ?>    
</body>
</html>