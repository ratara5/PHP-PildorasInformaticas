<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <title>Variables en PHP</title>
</head>
<body>
    <div id="3">
        <?php
            $name="Raymond";
            $age=18;

            /*AMBITOS DE VARIABLES */
            function getName(){
                $name="María";

                global $age; //este es el punto en el que debe volverse global una variable. SE PUEDE PRESCINDIR DE GLOBALIZAR VARIABLES MEDIANTE PASO DE PARÁMETROS (Y OBTENCIÓN DE RETORNOS(?)) A FUNCIONES
                //El siguiente texto no se va a formatear conforme el css
                $age="<h2>The age is " . $age . "</h2>";
            }
            
            //Estilo css no va a funcionar dentro de echo que tiene etiquetas html incrustadas (?)
            //echo es una EXPRESIÓN, se usa más pues es más eficiente
            echo '<h2>Hi <b>'. $name .'</b>, your age is <b>' . $age . '</b></h2></br>';
            //print es una FUNCIÓN
            print "<h2>Username is <b>" . $name . "</b></h2></br>";
            //Es aconsejable dejar espacios antes y después del . al concatenar
            echo "<h2>The user's age is <b>$age</b></h2></br>"; 
            //Para ver variables citadas dentro del mismo string es necesario que el string esté entre comillas dobles
            /*Si el programa solo incluye php, no es necesario y hasta desaconsejado el uso de la etiqueta de cierre PHP. Pero, esto solo es válido cuando no se desea procesar algo dentro de PHP (?)*/

            /*AMBITOS DE VARIABLES*/
            echo "<h2>" . $name . "</h2>"; //el name que se muestra no es el que aparece dentro de la función, a pesar de haber sido la última en escribirse
            echo  $age . "<br>"; //la age que se muestra es la que aparece dentro de la función, pues se antecedió de declaración para convertirla en global
            
            /*VARIABLES ESTÁTICAS*/
            function increaseVariable(){
                static $counter=0; //Esto solo se ejecutará una vez y...
                $counter++;
                echo $counter . "<br>"; //Este texto no se va a formatear conforme el css
            }//...el valor actual de la variable se conserva
            increaseVariable(); //Si la variable dentro de la función se reinicia cuando se invoca y no es estática, escribir la función una vez debajo de otra no servirá para que el contador se incremente a más de 1
            increaseVariable();
            increaseVariable();
            increaseVariable();
            increaseVariable();




        
        
        ?>
    </div>
    <div id="id1">
        <div id="id2"></div>
        <p>Esta es una prueba de Emmet que se escribió div#id1>(div#id2+p) y también para probar css. Recordar que los símbolos '>' y '<'' tienen precedencia sobre cualquier operación</p>
    </div>
</body>
</html>