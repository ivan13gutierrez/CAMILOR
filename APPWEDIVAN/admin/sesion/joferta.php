<?php include ("../vista/cabecera.php"); ?>


<?php 
$conexion = mysqli_connect("localhost","root","","bdsitio")or
die ("problemas con la conexion");

$registros = mysqli_query ($conexion,"SELECT nombreo,descu,codigo.pro FROM oferta  INNER JOIN where  codigo.pro=ofe.codigo.pro")
?>


                  









































