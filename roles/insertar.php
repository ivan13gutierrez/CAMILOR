<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$rol=$_POST['rol'];






$sql="INSERT INTO roles VALUES('$id','$rol')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: roles.php");
    
}else {
}
?>