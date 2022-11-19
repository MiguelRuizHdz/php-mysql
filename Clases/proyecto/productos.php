<?php


session_start();
if(!isset($_SESSION['rol'])){
    header('location:login.php');
}
else { 
    if (($_SESSION['rol']!=1)){
        header('location:index2.php');
    }
}
?>

<?php

// Autor: Miguel Angel Ruiz Hernández
include("include/bootstrap.php");
include("include/menu_admin.php");
require("script/connect_db.php");

$sql1 = ("SELECT * FROM productos");
$query1 = mysqli_query($conn, $sql1);

echo "<table class='table table-striped' border=2>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Id Producto</th>";
echo "<th>Nombre</th>";
echo "<th>Descripcion</th>";
echo "<th>Marca</th>";
echo "<th>Precio</th>";
echo "<th>Cantidad</th>";
echo "<th>Img</th>";
echo "<th>Editar</th>";
echo "<th>Borrar</th>";
echo "</tr>";

while ($arreglo1=mysqli_fetch_array($query1)){
    echo "<tr>";
    echo "<td>$arreglo1[0]</td>";
    echo "<td>$arreglo1[1]</td>";
    echo "<td>$arreglo1[2]</td>";
    echo "<td>$arreglo1[3]</td>";
    echo "<td>$arreglo1[4]</td>";
    echo "<td>$arreglo1[5]</td>";
    echo "<td>$arreglo1[6]</td>";
    echo "<td>$arreglo1[7]</td>";
    echo "<td align='center'><a href='prod_actualizar.php?id=$arreglo1[0]'><i class='fa-solid fa-pen-to-square'></i></td>";
    echo "<td align='center'><a href='productos.php?id=$arreglo1[0]&idborrar1=2'><i class='fa-solid fa-trash'></i></td>";
    echo "</tr>";
}
echo "</table>";

extract($_GET);
if (@$idborrar1==2) {
    $sqlborrar1="DELETE FROM productos WHERE id=$id";
    $resborrar1=mysqli_query($conn, $sqlborrar1);
    echo "<script>alert('Producto borrado exitosamente')</script>";
    echo "<script>location.href='productos.php'</script>";
}
?>

