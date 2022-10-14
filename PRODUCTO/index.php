<?php include 'HEADER1.PHP' ?>

<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from producto");
    $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($producto);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> con Exito.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong>  Actualizados Con Exito.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Eliminado con exito.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
            <div class="card">
                <div class="card-header">
                    <h5>LISTA DE PRODUCTOS</h5>
                </div>

                <div class="p-4">
                    <table class="table table-bordered align-middle" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Peso</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($producto as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->idproducto; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->precio; ?></td>
                                <td><?php echo $dato->peso; ?></td>
                                <td><a class="btn btn-success " href="editar.php?idproducto=<?php echo $dato->idproducto; ?>"><i class="bi bi-pencil-square"></i>Editar</a>

                                <a onclick="return confirm('Estas seguro de eliminar?');" class="btn btn-danger " href="eliminar.php?idproducto=<?php echo $dato->idproducto; ?>"><i class="bi bi-trash"></i> Borrar</a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
         </div>
         <div class="col-md-4">
      

                <form class="card p-4"  method="POST" action="registrar.php">
                <div class="card-header">
                    <h4>INGRESAR DATOS:</h4>
                    
                </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="Nombre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio: </label>
                        <input type="number" class="form-control" name="Precio" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Peso: </label>
                        <input type="number" class="form-control" name="Peso" autofocus required>
                    </div>
                  
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-success
" value="Registrar">
                   
                    </div>
                </form>
            </div>

</div>


<script>
var dataTable = new DataTable("#myTable");

</script> 
