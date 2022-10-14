<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);
?>
<?php include 'HEADER3.PHP' ?>
            <div class="container mt-5 ">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                                <form class="card p-3" action="insertar.php" method="POST">
                                <h4>INGRESAR DATOS</h4>


                                    <!-- <input type="text" class="form-control mb-3" name="idusuarios" placeholder="ID" required> -->

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="NOMBRE" required>

                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="APELLIDO" required>

                                    <input type="text" class="form-control mb-3" name="correo" placeholder="CORREO ELECTRONICO" required>

                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="TELEFONO" required>

                                    <input type="text" class="form-control mb-3" name="id" placeholder="ROL" required>

                                    <div class="d-grid">
                                    <input type="submit" class="btn btn-success" required>
                                    </div>
                                </form>
                        </div>

                        <div class="col-md-9">
                            <table class="table table-striped table-bordered">
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>APELLIDO</th>
                                        <th>CORREO ELECTRONICO</th>
                                        <th>TELEFONO</th>
                                        <th>ROL</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idusuarios']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['id']?></th>

                                                <th><a href="actualizar.php?idusuarios=<?php echo $row['idusuarios'] ?>" class="btn btn-success">Editar</a>
                                       
                                               <a href="delete.php?idusuarios=<?php echo $row['idusuarios'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>