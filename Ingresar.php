<?php
$nombre = $_POST('nombre');
$clave = $_POST('Clave');

mysql_connect("localhost", "root", "root");
mysql_select_db("proyecto");

$consulta = "Select * from egresados where nombre='$nombre' and facultad='$faculta'";
$resultado = mysql_query($consulta) or die (mysql_error());

if (mysql_num_rows($resultado)>0){
echo 1;
}
?>
