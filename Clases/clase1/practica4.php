<?php
// Autor: Miguel Angel Ruiz Hernández
// funciones de impresion

$variable1 = 1;
$variable2 = 2;
$etc = 3;
$etc1 = 4;

printf("cadena de formatos, $variable1, $variable2, $etc, $etc1 <br>");

echo "cadena de formatos, $variable1, $variable2, $etc, $etc1 <br>";
echo 'cadena de formatos, $variable1, $variable2, $etc, $etc1 <br>';
echo "cadena de formatos, $variable1, $variable2, \$etc, \$etc1 <br>";


printf("el numero %d %f %.2f", 2,2,2);
echo "<br> el numero %d %f %.2f", 2,2,2;
print_r( "<br> hola");

// var_dump($variable1);

// Funcion saludar
function saludame() {
    echo "<br>";
    echo "<br>";
    echo "Hola programador, ¿cómo estás?";
    echo "<br>";
    echo "Te espero el sabado";
}
// Invocamos la función
saludame();


$a = "El contenedor 12";
$p = "Miguel";
$q = "Atendio al empleado 4 al 15";

function variableGlobal()
{
    global $a, $p, $q, $variable2;
    echo '<br>', $p . " " . $q . " en el pasillo " . $variable2 . " que esta en el " . $a;
}

variableGlobal();


?>