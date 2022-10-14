

<?php  include("vista/cabecera.php")   ?>
<?php 
$codigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$nombreo=(isset($_POST['nombreo']))?$_POST['nombreo']:"";
$descu=(isset($_POST['descu']))?$_POST['descu']:"";
$codigoprod=(isset($_POST['codigoprod']))?$_POST['codigoprod']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("admin/config/conexion.php");

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
         <input type="number" required readonly name="codigo" id="codigo"  value="<?php echo $codigo; ?>" class="form-control" placeholder="Digite codigo">
                        
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
         <select name="codigoprod" class="form-control">

         <?php 
          include ("config/conexion.php");
         $registros = mysqli_query($conn, 'select codigo,nombre,foto from producto') or
         die("problemas  en la conexion" . mysqli_error($conexion));
         while ($reg = mysqli_fetch_array($registros)){
         echo "<option value=\"$reg[codigo]\">$reg[nombre]</option>";
         }           
         ?>       
                             
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
            <th>accion</th>               

          </tr>
          </thead>
          <tbody>
          <?php foreach($conn->query($result) as $list){ ?>
          <tr>
            <td><?php echo $list['codigo']?> </td>
            <td><?php  echo $list['nombreo']?></td>
            <td><?php  echo $list['descu']?></td>
            <td><?php  echo $list['codigoprod']?></td>
            <td><?php echo $list['nombre']?> </td>
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



















