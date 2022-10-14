<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['idusuarios'];

$sql="SELECT * FROM usuarios WHERE idusuarios='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idusuarios" value="<?php echo $row['idusuarios']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ;?>">

                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido'];  ?>">

                                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo Electronico" value="<?php echo $row['correo'] ;?>">

                                
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono'] ; ?>">

                                <input type="text" class="form-control mb-3" name="id" placeholder="Rol" value="<?php echo $row['id'] ; ?>">
                                
                            <input type="submit" class="btn btn-success btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>