<?php

include("conexion.php");
$con=conectar();

$id=$_GET['idusuarios'];

$sql="DELETE FROM usuarios  WHERE idusuarios='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios.php");
    }
?>
