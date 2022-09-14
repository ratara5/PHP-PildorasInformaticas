<style>
    *
    {
        background-color: #343434;
        color: #bea5ff;
    }
</style>

<?php
       if(isset(($_POST["button"]))){ //Si el usuario ha pulsado el botón, hacer lo siguiente...
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];
            calcular($numero1,$numero2,$operacion);
       }

       function calcular($numero1,$numero2,$operacion){
            if (strcmp("Suma",$operacion)==0){ //o !strcmp("Suma",$operacion)
                echo "<h2>El resultado de la $operacion es: " . ($numero1+$numero2) . "</h2>"; //Si no hay paréntesis, PHP sigue un orden de izquierda a derecha
            }
            if (strcmp("Resta",$operacion)==0){ //o !strcmp("Suma",$operacion)
                echo "<h2>El resultado de la $operacion es: " . ($numero1-$numero2) . "</h2>"; //Si no hay paréntesis, PHP sigue un orden de izquierda a derecha
            }
            if (strcmp("Multiplicacion",$operacion)==0){ //o !strcmp("Suma",$operacion)
                echo "<h2>El resultado de la $operacion es: " . ($numero1*$numero2) . "</h2>"; //Si no hay paréntesis, PHP sigue un orden de izquierda a derecha
            }
            if (strcmp("División",$operacion)==0){ //o !strcmp("Suma",$operacion)
                echo "<h2>El resultado de la $operacion es: " . ($numero1/$numero2) . "</h2>"; //Si no hay paréntesis, PHP sigue un orden de izquierda a derecha
            }
            if (strcmp("Módulo",$operacion)==0){ //o !strcmp("Suma",$operacion)
                echo "<h2>El resultado del $operacion es: " . ($numero1%$numero2) . "</h2>"; //Si no hay paréntesis, PHP sigue un orden de izquierda a derecha
            }
            if (strcmp("Incremento",$operacion)==0){ //o !strcmp("Suma",$operacion)
                echo "<h2>El resultado del $operacion del número 1 es: " . ($numero1+1) . "</h2>"; //Si no hay paréntesis, PHP sigue un orden de izquierda a derecha
            }
            if (strcmp("Decremento",$operacion)==0){ //o !strcmp("Suma",$operacion)
                echo "<h2>El resultado del $operacion del número 1 es: " . ($numero1-1) . "</h2>"; //Si no hay paréntesis, PHP sigue un orden de izquierda a derecha
            }
       }

    ?>