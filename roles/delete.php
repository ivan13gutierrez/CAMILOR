<?php

include("conexion.php");
$con=conectar();

$idrol=$_GET['id'];

$sql="DELETE FROM roles  WHERE id='$idrol'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: roles.php");
    }
?>
