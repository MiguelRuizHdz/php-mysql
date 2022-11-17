<?php
// Autor: Miguel Angel Ruiz Hernández
include("include/bootstrap.php");
include("include/menu_admin.php");
require("script/connect_db.php");

$sqlprod = ("SELECT * FROM productos");
$queryprod = mysqli_query($conn, $sqlprod);
?>
<div class="card-group">
<?php
while($filas=mysqli_fetch_array($queryprod)){
    $id=$filas['id'];
    $id_prod=$filas['id_prod'];
    $nom_prod=$filas['nom_prod'];
    $desc_prod=$filas['desc_prod'];
    $marca=$filas['marca'];
    $precio=$filas['precio'];
    $cantidad=$filas['cantidad'];
    $img=$filas['img'];

?>

  <div class="card">
    <img src="img/<?php echo $img ?>" class="card-img-top" alt="..."/>
    <div class="card-body">
      <h5 class="card-title"><?php echo $nom_prod . " " . $id_prod; ?></h5>
      <p class="card-text">
        <?php echo $desc_prod ?>
      </p>
      <p>$<input type="text" value="<?php echo $precio ?>" readonly id="txtPrecio(<?php echo $id ?>)"></p>
      <p><input type="checkbox" name="" id="" class="form-check-input" onclick="Agregar(document.getElementById('txtPrecio(<?php echo $id ?>)').value.this.checked);">Agregar</input></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Marca <?php echo $marca ?></small>
    </div>
  </div>
  <?php
}
?>
</div>