<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM roles";
    $query=mysqli_query($con,$sql);
?>
<?php include 'HEADER4.PHP' ?>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                                <form class="card p-3" action="insertar.php" method="POST">
                                <h4>INGRESAR DATOS</h4>

                                    <input type="text" class="form-control mb-3" name="id" placeholder="ID" required>

                                    <input type="text" class="form-control mb-3" name="rol" placeholder="ROL" required>

                                    <div class="d-grid">
                                    <input type="submit" class="btn btn-success">
                                    </div>
                                </form>
                        </div>

                        <div class="col-md-9">
                            <table class="table table-striped table-bordered">
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID DE ROL</th>
                                        <th>ROL</th>
        
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['rol']?></th>
                                                

                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Editar</a>
                                       
                                               <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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