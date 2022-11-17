<?php
// Autor: Miguel Angel Ruiz Hernández
    $a = 7;
    $b = 4;
    // operadores aritmeticos
    echo $a+$b, '<br>';
    echo $a-$b, '<br>';
    echo 'la multiplicacion de a*b es '. $a*$b, '<br>';
    echo 'la division es '. $a/$b, '<br>';
    echo 'El modulo de a%b es '. $a%$b, '<br>';
    echo $a++, '<br>';
    echo 'El numero mayor a 7 es '. $a. '<br>';
    
    echo $b++, '<br>';
    echo 'El numero menor a 4 es '. $b. '<br>';
    // Operadores de comparacion
    if ($a!=$b) {
        echo "a no es igual a b";
    }
    else {
        echo "a si es igual a b";
    }
    // Operadores de logica
    if ($a==7 && $b==4) {
        echo "<br> a y b no son iguales a su valor";
    }
    else {
        echo "<br> a y b si son iguales a su valor";
    }
?>