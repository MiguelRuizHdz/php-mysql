<?php
// Autor: Miguel Angel Ruiz Hernández
session_start();
include("include/bootstrap.php");
include("include/menu_admin.php");
require("script/connect_db.php");
?>

<?php 
extract($_GET);
require("script/connect_db.php");
$sql = ("SELECT * FROM login WHERE id=$id");

$ressql=mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($ressql)){
    $id=$row[0];
    $nom=$row[1];
    $user=$row[2];
    $correo=$row[3];
    $pass=$row[4];
    $confpass=$row[5];
    $rol=$row[6];
}

?>
<div class="container mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <h3>Actualizar Usuario</h3>
            <form action="script/ejecutar_actualizar.php" method="post">
                Id <input name="id" type="text" class="form-control form-control-lg" value="<?php echo $id?>" readonly><br>
                Nombre <input name="nom" type="text" class="form-control form-control-lg"  value="<?php echo $nom?>"><br>
                Usuario <input name="user" type="text" class="form-control form-control-lg"  value="<?php echo $user?>"><br>
                Correo <input name="correo" type="text" class="form-control form-control-lg"  value="<?php echo $correo?>"><br>
                Password <input name="pass" type="text" class="form-control form-control-lg"  value="<?php echo $pass?>"><br>
                ConfPassword <input name="confpass" type="text" class="form-control form-control-lg"  value="<?php echo $confpass?>"><br>
                Rol <input name="rol" type="text" class="form-control form-control-lg"  value="<?php echo $rol?>"><br>
            
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Actualizar">
            </form>
        </div>
    </div>
</div>