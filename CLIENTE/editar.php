<?php include '../index.php' ?>

<?php
    if(!isset($_GET['idcliente'])){
        header('Location: cliente.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $cliente = $_GET['idcliente'];

    $sentencia = $bd->prepare("select * from cliente where idcliente = ?;");
    $sentencia->execute([$cliente]);
    $cliente = $sentencia->fetch(PDO::FETCH_OBJ);
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
                        <label class="form-label"><h5>nombre: </h5></label>
                        <input type="text" class="form-control" name="nombre" required 
                        value="<?php echo $cliente->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><h5>apellido</h5></label>
                        <input type="text" class="form-control" name="apellidos" autofocus required
                        value="<?php echo $cliente->apellidos; ?>">
                    </div>
      

                    <div class="mb-3">
                        <label class="form-label"><h5>telefono: </h5></label>
                        <input type="number" class="form-control" name="telefono" autofocus required
                        value="<?php echo $cliente->telefono; ?>">
                    </div>



                    <div class="d-grid">
                        <input type="hidden" name="idcliente" value="<?php echo $cliente->idcliente; ?>">
                        <input type="submit" class="btn btn-primary" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

