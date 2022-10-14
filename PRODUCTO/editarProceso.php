<?php
    print_r($_POST);
    if(!isset($_POST['idproducto'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $idproducto = $_POST['idproducto'];
    $nombre = $_POST['Nombre'];
    $precio = $_POST['Precio'];
    $peso = $_POST['Peso'];

    $sentencia = $bd->prepare("UPDATE producto SET nombre = ?, precio = ?, peso = ? where idproducto = ?;");
    $resultado = $sentencia->execute([$nombre, $precio, $peso, $idproducto]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>