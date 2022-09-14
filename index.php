<!doctype html>
<html>
    <head>
        <title>Index de PHP</title>
    </head>
    <body>
        <?php 
        print "<h1>El navegador usado es:</h1>";
        echo $_SERVER['HTTP_USER_AGENT'], '<br>';
        print "Otra linea de test";
        echo '<h1>La siguiente es la información del sistema</h1>';
        phpinfo();
        ?>
    </body>
</html>
