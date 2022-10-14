<?php

include("conexion.php");
$con=conectar();

$idrol=$_POST['id'];
$rol=$_POST['rol'];


$sql="UPDATE roles SET rol='$rol' WHERE id='$idrol'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: roles.php");
    }
?>