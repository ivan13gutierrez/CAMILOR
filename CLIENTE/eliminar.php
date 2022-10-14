<?php 
    if(!isset($_GET['idcliente'])){
        header('Location: cliente.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $cliente = $_GET['idcliente'];

    $sentencia = $bd->prepare("DELETE FROM cliente where idcliente = ?;");
    $resultado = $sentencia->execute([$cliente]);

    if ($resultado === TRUE) {
        header('Location: cliente.php?mensaje=eliminado');
    } else {
        header('Location: cliente.php?mensaje=error');
    }
    
?>