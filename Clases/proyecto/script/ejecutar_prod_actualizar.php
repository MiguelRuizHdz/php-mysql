<?php

extract($_POST);

require("connect_db.php");

$sentencia = "UPDATE productos SET id_prod='$id_prod', nom_prod='$nom_prod', desc_prod='$desc_prod', marca='$marca',
precio='$precio', cantidad='$cantidad' WHERE id='$id' ";

$ressent=mysqli_query($conn, $sentencia);

if ($ressent==NULL) {
    echo 'Error al procesar los datos'.$sentencia."<br>".mysqli_errno($conn);
    echo "<script>location.href='../productos.php'</script>";
}
else
{
    // echo 'Registro exitoso';
    echo '<script>alert("REGISTRO ACTUALIZADO")</script>' .$sentencia."<br>".mysqli_errno($conn);
    echo "<script>location.href='../productos.php'</script>";
}


?>