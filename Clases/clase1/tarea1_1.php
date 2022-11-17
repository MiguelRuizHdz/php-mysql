<?php
// Autor: Miguel Angel Ruiz Hernández
$Nombre = $_REQUEST['Nombre'];
$ApellidoPaterno = $_REQUEST['ApellidoPaterno'];
$ApellidoMaterno = $_REQUEST['ApellidoMaterno'];
$Edad = $_REQUEST['Edad'];
$Correo = $_REQUEST['Correo'];
$Telefono = $_REQUEST['Telefono'];
$Profesion = $_REQUEST['Profesion'];
$Ubicacion = $_REQUEST['Ubicacion'];
$SitioWeb = $_REQUEST['SitioWeb'];
$Formacion = $_REQUEST['Formacion'];
$ExperienciaLaboral = $_REQUEST['ExperienciaLaboral'];
$Idiomas = $_REQUEST['Idiomas'];
$AboutYou = $_REQUEST['AboutYou'];

echo "<h1>" . $Profesion . "</h1>";
echo "<h2>" . $Nombre . " " . $ApellidoPaterno . " " . $ApellidoMaterno. "</h2>";
echo "<p>" . $Edad . " años </p>";
echo "<p>" . $Correo . "</p>";
echo "<p>" . $Telefono . "</p>";
echo "<p>" . $Ubicacion . "</p>";
echo "<p>" . $SitioWeb . "</p>";
echo "<h4>Sobre mi</h4>";
echo "<p>" . $AboutYou . "</p>";
echo "<h4>Formacion</h4>";
echo "<p>" . $Formacion . "</p>";
echo "<h4>Experiencia Laboral</h4>";
echo "<p>" . $ExperienciaLaboral . "</p>";
echo "<h4>Idiomas</h4>";
echo "<p>" . $Idiomas . "</p>";

?>