<?php 
// Autor: Miguel Angel Ruiz Hernández
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
<form action="script/ejecutar_actualizar.php" method="post">
    Id <input name="id" type="text" value="<?php echo $id?>" readonly><br>
    Nombre <input name="nom" type="text" value="<?php echo $nom?>"><br>
    Usuario <input name="user" type="text" value="<?php echo $user?>"><br>
    Correo <input name="correo" type="text" value="<?php echo $correo?>"><br>
    Password <input name="pass" type="text" value="<?php echo $pass?>"><br>
    ConfPassword <input name="confpass" type="text" value="<?php echo $confpass?>"><br>
    Rol <input name="rol" type="text" value="<?php echo $rol?>"><br>

    <input type="submit" value="Actualizar">
</form>