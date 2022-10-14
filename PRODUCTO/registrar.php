<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["Nombre"]) || empty($_POST["Precio"]) || empty($_POST["Peso"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["Nombre"];
    $precio = $_POST["Precio"];
    $peso = $_POST["Peso"];
    
    $sentencia = $bd->prepare("INSERT INTO producto(nombre,precio,peso) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$precio,$peso]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>