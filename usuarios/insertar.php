<?php
include("conexion.php");
$con=conectar();

$id=$_POST['idusuarios'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$rol=$_POST['id'];


$sql="INSERT INTO usuarios VALUES('$id','$nombre','$apellido','$correo','$telefono','$rol')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuarios.php");
    
}else {
}
?>