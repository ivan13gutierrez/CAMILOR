<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["nombre"]) || empty($_POST["apellidos"]) || empty($_POST["telefono"])){
        header('Location: cliente.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $telefono= $_POST["telefono"];
    
    $sentencia = $bd->prepare("INSERT INTO cliente(nombre,apellidos,telefono) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellidos,$telefono]);

    if ($resultado === TRUE) {
        header('Location: cliente.php?mensaje=registrado');
    } else {
        header('Location: cliente.php?mensaje=error');
        exit();
    }
    
?>