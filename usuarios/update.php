<?php

include("conexion.php");
$con=conectar();

$id=$_POST['idusuarios'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$rol=$_POST['id'];

$sql="UPDATE usuarios SET  nombre='$nombre', apellido='$apellido', correo='$correo',telefono='$telefono', id='$rol' WHERE idusuarios='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios.php");
    }
?>