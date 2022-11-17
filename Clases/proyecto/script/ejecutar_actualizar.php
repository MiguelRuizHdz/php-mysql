<?php

extract($_POST);

require("connect_db.php");

$sentencia = "UPDATE login SET nom='$nom', user='$user', correo='$correo',
pass='$pass', confpass='$confpass', rol='$rol' WHERE id='$id' ";

$ressent=mysqli_query($conn, $sentencia);

if ($ressent==NULL) {
    echo 'Error al procesar los datos'.$sentencia."<br>".mysqli_errno($conn);
    echo "<script>location.href='../admin.php'</script>";
}
else
{
    // echo 'Registro exitoso';
    echo '<script>alert("REGISTRO ACTUALIZADO")</script>' .$sentencia."<br>".mysqli_errno($conn);
    echo "<script>location.href='../admin.php'</script>";
}


?>