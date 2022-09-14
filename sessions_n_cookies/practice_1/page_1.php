<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../styles/style.css" rel="stylesheet" type="text/css">
    <title>Page 1</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["selected_language"])){
            if($_COOKIE["selected_language"] =="es"){
                header("Location:espanol.php");
            }else{ //it means $_COOKIE["selected_language"] =="en"
                header("Location:english.php");
            }
        }
    ?>
    <div>
        <table>
            <tr>
                <td colspan="2">
                    Elige el idioma
                </td>
            </tr>
            <tr>
                <td>
                    <a href="create_cookie.php?language=es"><img src="img/espanol.png" width="90" height="60"/></a>
                </td>
                <td>
                    <a href="create_cookie.php?language=en"><img src="img/english.jpg" width="90" height="60"/></a>
                </td>
            </tr>
        </table>
    </div>
    <p>&nbsp</p>
    <p>&nbsp</p>
</body>
</html>