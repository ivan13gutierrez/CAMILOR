<?php 
$codigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$nombreo=(isset($_POST['nombreo']))?$_POST['nombreo']:"";
$descu=(isset($_POST['descu']))?$_POST['descu']:"";
$codigoprod=(isset($_POST['codigoprod']))?$_POST['codigoprod']:"";
$foto=(isset($_POST['foto']))?$_POST['foto']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/conexion.php");
include("joferta.php");


switch ($accion) {
    case 'agregar':
      
    
        $result = $conn->query("INSERT INTO `oferta`(`codigo`, `nombreo`, `descu`, `codigoprod`) VALUES (NULL,'$nombreo','$descu','$codigoprod')");
      
        
    break;

    case 'modificar':

    
        $result = $conn->query(" UPDATE oferta SET `nombreo`=`$nombreo`,`descu`=`$descu`, `codigoprod`=`$codigoprod` WHERE `codigo`=$codigo");
    break;

    case 'Borrar':

        $result=$conn->query("DELETE FROM oferta WHERE `codigo`=$codigo");
           
    break;

    case 'eliminar':
        header("location:oferta.php");
        
    break;

    case 'seleccionar':
        $result=$conn->query("SELECT `codigo`,`nombreo`, `descu`, `codigoprod`   FROM `producto` WHERE `codigo`=$codigo");
        $producto = mysqli_fetch_all($result, MYSQLI_ASSOC);
       
        
    break;

}
$result = ("SELECT * FROM oferta");

?>

         <div class="col-md-4">
         <div class="card">
         <div class="card-header">
         Formulario de Registro de ofertas
         </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
         <div class="form-group">
         <label >Codigo</label>
         <input type="number"  name="codigo" id="codigo"  value="<?php echo $codigo; ?>" class="form-control" placeholder="Digite codigo dela  oferta">
                        
         </div>
          <div class="form-group">
        <label>nombre</label>
         <input type="text"  name="nombreo"  value="<?php echo $nombreo;?>" class="form-control" placeholder="Digite Nombre dela oferta">
         </div>
         <div class="form-group">
         <label>descuento</label>
         <input type="number"  name="descu" id ="descu" value="<?php echo $descuento;?>" class="form-control" placeholder="Digite el descuento del producto">
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
            <th>Nombre dela oferta</th>
            <th>descuento</th>
            <th>codigo del producto</th>
            <th>nombre del producto</th>                         
            
          </tr>
           </thead>
          <tbody>
         <?php foreach($conn->query($result) as $list){ ?>
         <tr>
            <td><?php echo $list['codigo']?> </td>
            <td><?php  echo $list['nombreo']?></td>
            <td><?php  echo $list['descu']?></td>
            <td><?php  echo $list['codigo.pro']?></td>
            <td><?php  echo $list['nombre del producto']?></td>
            <td><?php echo $list['precio']?> </td>

             <td>
                <img src="../../img/<?php  echo $list['foto']?>" alt="" width="100px" height="100px">
                <?php  echo $list['foto']?>
             </td>

             <td><?php  echo $list['codigo']?></td>
            
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
