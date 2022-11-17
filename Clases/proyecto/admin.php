<?php
// Autor: Miguel Angel Ruiz Hernández
include("include/bootstrap.php");
include("include/menu_admin.php");
require("script/connect_db.php");


$sql = ("SELECT * FROM login");
$query = mysqli_query($conn, $sql);

echo "<table class='table table-striped' border=2>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nombre</th>";
echo "<th>Usuario</th>";
echo "<th>Correo</th>";
echo "<th>Password</th>";
echo "<th>ConfPassword</th>";
echo "<th>Rol</th>";
echo "<th>Editar</th>";
echo "<th>Borrar</th>";
echo "</tr>";

while ($arreglo=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>$arreglo[0]</td>";
    echo "<td>$arreglo[1]</td>";
    echo "<td>$arreglo[2]</td>";
    echo "<td>$arreglo[3]</td>";
    echo "<td>$arreglo[4]</td>";
    echo "<td>$arreglo[5]</td>";
    echo "<td>$arreglo[6]</td>";
    echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='img/editar.png'></a></td>";
    echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='img/borrar.png'></a></td>";
    echo "</tr>";
}
echo "</table>";

extract($_GET);
if (@$idborrar==2) {
    $sqlborrar="DELETE FROM login WHERE id=$id";
    $resborrar=mysqli_query($conn, $sqlborrar);
    echo "<script>alert('Registro borrado exitosamente')</script>";
    echo "<script>location.href='admin.php'</script>";
}
?>

