<?php

$servername = "localhost";
$database = "prueba";
$user = "root";
$pass = "";
$port = 3306;

// Crear conexion
$conn = mysqli_connect($servername, $user, $pass, $database);

// check conexion
if( !$conn ) {
    die("Conexion fallida al servidor: ". mysqli_connect_error());
}

$sql = "insert into empleados( nombre, apellidoP, apellidoM, fechaNac, correo, telefono ) values (
    '".$_POST['nombre']."',
    '".$_POST['apellidoP']."',
    '".$_POST['apellidoM']."',
    '".$_POST['fechaNac']."',
    '".$_POST['correo']."',
    '".$_POST['telefono'] . "')";

$result = mysqli_query($conn, $sql);
if (!$result) {
    if (mysqli_query($conn, $sql)) {
        echo '<script language="javascript">alert("Nuevo registro creado")</script>';
    } else {
        echo "Error al ingresar los datos " . $sql . " <br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>