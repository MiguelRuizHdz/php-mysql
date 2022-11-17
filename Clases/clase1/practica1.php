<?php
// Autor: Miguel Angel Ruiz Hernández
    // PRACTICA DE HOLA
    # PRACTICA DE HOLA
    /* PRACTICA
    HOLA
    NUMERO 1
     */
    echo "hola bienvenidos al curso";
    
    # Ejemplo variable matricula
    $MATRICULA = 8078179;
    echo '<br>';
    echo 'La matricula es ' .$MATRICULA;
    echo '<br>';
    echo "la matricula es $matricula <br>";
    echo 'la matricula es .$MATRICULA <br>';
    echo "la matricula es $MatrIcula <br>";

    $str = 'Hola Mundo';
    print $str;

    $str2 = '<br> Esta es la segunda impresion';
    print $str2;

    $edad = array('miguel'=>'22');
    printf('<br>Miguel tiene '.$edad['miguel'].' años<br>');

    // concatenacion
    $nombre = "Miguel Ruiz";
    $ciudad = "San Nicolas";
    $pais = "México";
    $edad1 = '18';

    echo 'Hola mi nombre es '. $nombre. ' vivo en la ciudad ' .$ciudad . ' que pertenece al pais ' . $pais . ' y tengo ' . $edad1. 'años';
?>