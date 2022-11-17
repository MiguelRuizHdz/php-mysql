<?php

// Crear conexion
$conn = new Mysqli("localhost", "root", "", "proyecto", 3306);

if ($conn -> connect_errno) {
    die ("Fallo de la concexion con el servidor con MySQL : ("
        .$conn -> mysql_connect_errno(). ")"
        .$conn -> mysql_connect_errno());
}

?>