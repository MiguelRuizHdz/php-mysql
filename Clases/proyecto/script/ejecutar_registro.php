<?php

extract($_POST);

require("connect_db.php");

$sql_insert = "INSERT INTO `login` ( `nom`, `user`, `correo`, `pass`, `confpass`, `rol`) VALUES ('$nom', '$user', '$correo', '$pass', '$confpass', 2)";

$res_insert=mysqli_query($conn, $sql_insert);

if (!$res_insert) {
    echo "Error al ingresar los datos" . $sql_insert."<br>".mysqli_errno($conn);
    echo "<script>location.href='../admin.php'</script>";
}
else {
    echo "Nuevo registro creado";
    echo "<script>location.href='../admin.php'</script>";
}

mysqli_close($conn);
?>
