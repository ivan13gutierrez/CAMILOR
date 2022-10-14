<?php include '../index.php' ?>

<?php
    if(!isset($_GET['idproducto'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $idproducto = $_GET['idproducto'];

    $sentencia = $bd->prepare("select * from producto where idproducto = ?;");
    $sentencia->execute([$idproducto]);
    $producto = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>                    Editar datos:
</h4>
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label"><h5>Nombre: </h5></label>
                        <input type="text" class="form-control" name="Nombre" required 
                        value="<?php echo $producto->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><h5>Precio</h5></label>
                        <input type="number" class="form-control" name="Precio" autofocus required
                        value="<?php echo $producto->precio; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><h5>Peso: </h5></label>
                        <input type="text" class="form-control" name="Peso" autofocus required
                        value="<?php echo $producto->peso; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="idproducto" value="<?php echo $producto->idproducto; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar1">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

