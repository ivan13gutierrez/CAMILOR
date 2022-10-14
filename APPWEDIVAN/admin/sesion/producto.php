<?php include("../vista/cabecera.php"); ?>
<?php 
$codigo=(isset($_POST['codigo.pro']))?$_POST['codigo.pro']:"";
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$foto=(isset($_FILES['foto']['name']))?$_FILES['foto']['name']:"";
$precio=(isset($_POST['precio']))?$_POST['precio']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/conexion.php");


switch ($accion) {
        case 'agregar':
          
        
            $result = $conn->query("INSERT INTO `producto`(`codigo.pro`, `nombre`, `foto`, `precio`) VALUES (NULL,'$nombre','$foto','$precio')");
          
            
        break;

        case 'modificar':

        
            $result = $conn->query(" UPDATE producto SET `nombre`=`$nombre`,`foto`=`$foto`, `precio`=`$precio` WHERE `codigo.pro`=$codigo");
        break;

        case 'Borrar':

            $result=$conn->query("DELETE FROM producto WHERE `codigo.pro`=$codigo");
               
        break;

        case 'eliminar':
            header("location:producto.php");
            
        break;

        case 'seleccionar':
            $result=$conn->query("SELECT `codigo.pro`,`nombre`, `foto`, `precio` FROM `producto` WHERE `codigo.pro`=$codigo.pro");
            $producto = mysqli_fetch_all($result, MYSQLI_ASSOC);
           
            
        break;
    
                
     
    
 
}
$result = ("SELECT * FROM producto");

?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Formulario de Registro de productos
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >Codigo</label>
                        <input type="text" required readonly name="codigo" id="codigo"  value="<?php echo $codigo; ?>" class="form-control" placeholder="Digite codigo">
                        
                     </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text"  name="nombre" id ="nombre" value="<?php echo $nombre;?>" class="form-control" placeholder="Digite Nombre del producto">
                    </div>

                    <div class="form-group">
                        <label>Imagen</label>
                        <?php echo $foto ?>
                        <input type="file" name="foto" id ="foto"  class="form-control" placeholder="Cargue imagen del producto">
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number"  name="precio" id ="precio" value="<?php echo $precio;?>" class="form-control" placeholder="Digite precio del producto">
                    </div>

                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="accion" value="agregar" class="btn btn-success">Registro</button>
                        <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                        <button type="submit" name="accion" value="eliminar" class="btn btn-danger">Cancelar</button>
                    </div>               
                  
                </form>
        </div>
        
    </div>
            
    
</div>
<div class="col-md-7">
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre del producto</th>
            <th>Imagen</th>
            <th>precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($conn->query($result) as $list){ ?>
        <tr>
            <td><?php echo $list['codigo.pro']?> </td>
            <td><?php  echo $list['nombre']?></td>
            <td>
                <img src="../../img/<?php  echo $list['foto']?>" alt="" width="100px" height="100px">
                <?php  echo $list['foto']?>
            </td>

            <td><?php  echo $list['precio']?></td>

            <td> <form method="post">

                <input type="hidden" name="codigo" id="codigo" value="<?php echo $list['codigo']?>">
              <input type="submit" name="accion" value="seleccionar" class="btn btn-success">
                <input type="submit" name="accion" value="Borrar" class="btn btn-danger">
            </form> </td>
        </tr>
       <?php } ?>
    </tbody>
</table>    

</div>

<?php include("../vista/pie.php"); ?>