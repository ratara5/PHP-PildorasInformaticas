<!-- INGRESAR AL SITIO así después de iniciar el xammp->localhost/php/flujo.php -->
<!-- Para escribir rápido todo el código de html, escribir en vscode: 'html:5' -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Flujo de ejecución</title>
</head>
<body>
    <div id="id1">
        <?php $expression=true?>
        <h2>El valor de la variable Booleana expression se estableció dentro del código php</h2>
</div>
<div id="id2">
    <?php if ($expression == true):?>
        <h1><b>El valor de la variable expression se estableció en true</b></h1>
    <?php endif;?>
   
</div>
<p>Este es otro texto</p>
<!--El texto tomará el formato del contenedor en el que se crea la función. No donde se implementa-->
<div id="id3">
    <?php
    function giveData(){
        echo "Este es el mensaje del interior de la función <br><br>";
    }
    ?>
<!--Una función se puede llamar antes o después de su creación-->
<div>
<?php 
    giveData();
?>
<!--Para traer funciones desde otros ficheros.php-->
<?php
    include ("util_functions.php"); #Include con fichero q no existe...ERROR: La función que se supone está dentro de él, no existe
    //require ("util_functionss.php"); #Require con fichero que no existe...ERROR: El fichero no existe
?>
<?php
    utilFunctionOne();
?>
</body>
</html>