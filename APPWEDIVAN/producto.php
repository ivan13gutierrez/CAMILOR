<?php  include("vista/cabecera.php");?>
<?php
include("admin/config/conexion.php");
$result = ("SELECT * FROM producto");
?>
   <?php foreach($conn->query($result) as $list){ ?>
<div class="col-md-4">
<div class="card">
    <img class="card-img-top" src="img/<?php echo $list['foto']?>" alt="">
    <div class="card-body">
        <h4 class="card-title"><?php echo $list['nombre']?></h4>
        <h5 class="card-title">Precio: $<?php echo $list['precio']?></h5>

        <a href="#" class="btn btn-primary">VER MAS</a>
    </div>
</div> 
</div>

<?php }?>

<?php  include("vista/pie.php");?>