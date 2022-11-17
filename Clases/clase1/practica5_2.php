<?php

$a = $_POST['nombre'];
$b = $_REQUEST['edad'];
echo "Tu nombre es ".$a." y el tiene " .$b, ' años' ;

echo '<script>alert( "Tu nombre es ' .$a. ' y el tiene ' .$b. ' años " );</script>';

?>