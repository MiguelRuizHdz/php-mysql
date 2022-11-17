<?php

$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"]; //subject
$telefono = $_REQUEST["telefono"];
$correo = $_REQUEST["correo"]; // to
$mensaje = $_REQUEST["mensaje"]; // message
$archivo = $_REQUEST["archivo"];


echo "DE: " . $nombre . " " . $apellido;
echo "<br>Contacto " . $telefono;
echo "<br>Correo " . $correo;
echo "<br>Mensaje " . $mensaje;

// mail($correo, $apellido, $mensaje);


// Esto es para activar la visualizacion de errores en el servidor, por si los hubiese
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

// El correo debe corresponder a una cuenta real creada en el servidor
$headers = "From: miguel.ruiz.hdz.00@gmail.com\r\n";
$headers = "Reply-To: $correo\r\n";
$headers = "MIME-Version: 1.0\r\n";
$headers = "Content-Type: text/html; charset=utf-8\r\n";

if (mail($correo, $apellido, $mensaje)) {
    echo "correo enviado";
} else {
    $errorMessage=error_get_last()['msg'];
    echo $errorMessage;
}

// function form_envio($sPara, $sAsunto, $sTexto, $sDe){
//     $bHayFicheros=0;
//     $sCabeceraTexto="";
//     $sCuerpo=$sTexto;
//     $sArchivo="";
//     $sSeparador = uniqid("_Separador-de-datos");

//     $sCabecera = "MIME-version:1.0\n";
//     // recogemos los datos del formulario
//     foreach($_POST a)
// }

?>