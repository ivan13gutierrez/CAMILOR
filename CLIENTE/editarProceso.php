<?php
    print_r($_POST);
    if(!isset($_POST['idcliente'])){
        header('Location: cliente.php?mensaje=error');
    }

    include 'model/conexion.php';
    $cliente = $_POST['idcliente'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];

    $sentencia = $bd->prepare("UPDATE cliente SET nombre = ?, apellidos = ?, telefono = ? where idcliente = ?;");
    $resultado = $sentencia->execute([$nombre, $apellidos, $telefono,$cliente]);

    if ($resultado === TRUE) {
        header('Location: cliente.php?mensaje=editado');
    } else {
        header('Location: cliente.php?mensaje=error');
        exit();
    }
    
?>