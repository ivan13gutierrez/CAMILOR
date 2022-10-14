<?php 
    if(!isset($_GET['idproducto'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $producto = $_GET['idproducto'];

    $sentencia = $bd->prepare("DELETE FROM producto where idproducto = ?;");
    $resultado = $sentencia->execute([$producto]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>