<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practica 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<?php
// Autor: Miguel Angel Ruiz Hernández
// Condicional if
$a = 15;

if ($a == 10)
{
    echo 'El valor de a es de 10';
} 
else if ($a == 20)
{
    echo 'El valor de a es de 20';
}
else if ($a == 5)
{
    echo 'El valor de a es de 5';
}
else
{
    echo 'No es ni 10, ni 20, ni 5, el valor de a es: '.$a;
}

echo '<br>';

switch ($a) {
    case 0:
        echo 'El valor de a es de 10';
        break;
    case 1:
        echo 'El valor de a es de 20';
        break;
    case 2:
        echo 'El valor de a es de 5';
        break;
    default:
        echo 'No es ni 10, ni 20, ni 5, el valor de a es: '.$a;
        break;
}

?>

<?php
// for
echo '<br> Hola como vas Saludos <br>';

for ($i = 0; $i < 5; $i++)
{
    echo 'hola ' .$i. '<br>';
}
?>

<?php
$x=4;
$n=1;

do 
{
    $n=$n*$x;
    $x-=1;
} while( $x > 1 );

echo "4! es a: " .$n . "";

?>

<body>
<?php
// condicional while
$y=1;
while($y < 5)
{
    echo $y . '<br>';
    $y += 1; 
}
echo '<br> la variable $y vale: ' . $y . '<br>';
?>

<?php
// condicional foreach
$c = array(1,3,5,7,9,11,13,15);
foreach ($c as $v)
{
    echo "el Valor actual de \$c es : " . $v . '<br>';
}
?>


<?php
// condicional if con retorno de funcion

function validarEdad()
{
    $edad = 18;
    if ($edad >= 18) {
        return true;
    } 
    else 
    {
        return false;
    }
}

if (validarEdad()) {
    echo 'Si es apto para ver la pelicula';
}
else {
    echo 'No es apto para ver la pelicula';
}

?>

</body>
</html>