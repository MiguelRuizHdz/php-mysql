<?php
// Autor: Miguel Angel Ruiz Hernández
session_start();
if(!isset($_SESSION['rol'])){
  header('location:login.php');
}
else {
  if (($_SESSION['rol'] != 2)){
    header('location:login.php');
  }
} 
?>

<?php
include("include/bootstrap.php");
include("include/menu_user.php");


require("script/connect_db.php");
require("script/image-colors.php");
require("script/luminosity-contrast.php");

$sqlprod = ("SELECT * FROM productos");
$queryprod = mysqli_query($conn, $sqlprod);
?>


<form>
  <script src="script/productos.js"></script>
  <div class="container">
    <div class="row">
      
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

          $palette = colorPalette("img/$img", 5, 4); 
          $color_font = getContrastColor($palette[0]);
      ?>

      <div class="col-6 col-md-4 col-lg-3 mt-3" >

        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="img/<?php echo $img ?>" class="img-fluid"/>
            <a href="#">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body" style="background-color: #<?php echo $palette[0] ?>; color:<?php echo $color_font ?>;">
            <h5 class="card-title"><?php echo $nom_prod ?></h5>
            <p class="card-text"><?php echo $desc_prod ?>...</p>
            <p><b>$</b> <input type="text" value="<?php echo $precio ?>" readonly id="txtPrecio(<?php echo $id ?>)"></p>
            <p><input type="checkbox" name="" id="" class="form-check-input" onclick="Agregar(document.getElementById('txtPrecio(<?php echo $id ?>)').value,this.checked);">Agregar</input></p>
          </div>
          <div class="card-footer" style="background-color: #<?php echo $palette[0] ?>; color:<?php echo $color_font ?> !important;">
            <small>Proveedor <b><?php echo $marca ?></b></small>
          </div>
        </div>

      </div>

      <?php
        }
      ?>

    </div>
  </div>

  <div style="display:none">
    <INPUT type="text" style="width:100px" name="articulos" />
    <INPUT type="text" style="width:100px" name="total" />
    <INPUT type="text" style="width:100px" name="descuento" />
    <INPUT type="text" style="width:100px" name="iva" />
    <INPUT type="text" style="width:100px" name="neto" />
  </div>
</form>