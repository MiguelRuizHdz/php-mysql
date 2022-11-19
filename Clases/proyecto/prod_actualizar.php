<?php
session_start();
// Autor: Miguel Angel Ruiz Hernández
include("include/bootstrap.php");
include("include/menu_admin.php");
require("script/connect_db.php");
?>

<?php 
extract($_GET);
require("script/connect_db.php");
$sql = ("SELECT * FROM productos WHERE id=$id");

$ressql=mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($ressql)){
    $id=$row[0];
    $id_prod=$row[1];
    $nom_prod=$row[2];
    $desc_prod=$row[3];
    $marca=$row[4];
    $precio=$row[5];
    $cantidad=$row[6];
    $img=$row[7];
}

?>
<div class="container mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <h3>Actualizar producto</h3>
            <form action="script/ejecutar_prod_actualizar.php" method="post">
                Id <input name="id" type="text" class="form-control form-control-lg" value="<?php echo $id?>" readonly><br>
                Id Producto<input name="id_prod" type="text" class="form-control form-control-lg"  value="<?php echo $id_prod?>"><br>
                Nombre <input name="nom_prod" type="text" class="form-control form-control-lg"  value="<?php echo $nom_prod?>"><br>
                Descripcion <input name="desc_prod" type="text" class="form-control form-control-lg"  value="<?php echo $desc_prod?>"><br>
                Marca <input name="marca" type="text" class="form-control form-control-lg"  value="<?php echo $marca?>"><br>
                Precio <input name="precio" type="text" class="form-control form-control-lg"  value="<?php echo $precio?>"><br>
                Cantidad <input name="cantidad" type="text" class="form-control form-control-lg"  value="<?php echo $cantidad?>"><br>
                Img <input name="img" type="text" class="form-control form-control-lg"  value="<?php echo $img?>"><br>
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Actualizar">
            </form>
        </div>
    </div>
</div>