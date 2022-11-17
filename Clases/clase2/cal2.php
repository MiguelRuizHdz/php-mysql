<?php

$a = $_REQUEST["valor1"];
$b = $_REQUEST["valor2"];
// $Sumar = $_POST["Sumar"];
// $Restar = $_POST["Restar"];
// $Multiplicar = $_POST["Multiplicar"];
// $Division = $_POST["Division"];

// echo $a + $b;

// switch {
//     case Sumar:
//         echo $a + $b;
//         break;
//     case Restar:
//         echo $a - $b;
//         break;
//     case Multiplicar:
//         echo $a * $b;
//         break;
//     case Division:
//         echo $a / $b;
//         break;
//     default:
//         echo "Operacion incorrecta";
//         break
// }

if (isset($_POST["Sumar"])) {
    $c = $a + $b;
    echo $a + $b;
    echo '<br>';
    echo 'la respuesta de la suma es ' . $c;
}
if (isset($_POST["Restar"])) {
    $c = $a - $b;
    echo $a - $b;
    echo '<br>';
    echo 'la respuesta de la resta es ' . $c;
}
if (isset($_POST["Multiplicar"])) {
    $c = $a * $b;
    echo $a * $b;
    echo '<br>';
    echo 'la respuesta de la multiplicacion es ' . $c;
}
if (isset($_POST["Division"])) {
    
    if( $b == 0){
        echo 'No se puede dividir entre 0';
        echo '<script language="javascript">alert("Error")</script>';
    }
    else {
        $c = $a / $b;
        echo $a / $b;
        echo '<br>';
        echo 'la respuesta de la division es ' . $c;
    }

}

ob_start();
header("refresh:2; url=cal1.php");
ob_end_flush();
?>