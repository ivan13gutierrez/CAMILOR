<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT nombre, apellido, rol FROM usuarios INNER JOIN roles WHERE usuarios.idrol = roles.idrol" ;
    $query=mysqli_query($con,$sql);
?>
<?php include 'HEADER5.PHP' ?>
            <div class="container mt-5">
                    <div class="row"> 
                        
                  
<center> 
    
                        <div class="col-md-10">
                            <table class="table table-striped table-bordered">
                                <thead class="table-success table-striped">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apelido</th>
                                        <th>Rol</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['rol']?></th>            
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            </center>
    </body>
</html>