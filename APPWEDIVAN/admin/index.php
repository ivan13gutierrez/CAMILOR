<?php 
session_start();

if($_POST){
    if(($_POST['usuario']=="admin")&&($_POST['clave']=="ivan")){
        $_SESSION['usuario']="ok";
        $_SESSION['nomUsuario']="IVANG";
    
    header('Location:inicioadmin.php');
    }else{
        $mensaje="Error: Datos Incorrecto";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
            <br><br><br>
            <div class="card">
                <div class="card-header">
                    FORMULARIO DE INGRESO
                </div>
                <div class="card-body">
                    <?php  if (isset($mensaje)) {?>
                    <div class="alert alert-primari" role="alert">
                    <?php  echo $mensaje?>    

                    </div> <?php } ?>
                <form method="POST">
                    <div class="form-group">
                        <label >USUARIO</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Digite su contraseña">
                        
                     </div>
                    <div class="form-group">
                        <label>CONTRASEÑA</label>
                        <input type="password" name="clave"class="form-control" placeholder="Digite su contraseña">
                    </div>
                    
                  <button type="submit" class="btn btn-primary">INGRESAR</button>
                </form>

                </div>
                
            </div>

            </div>
            
        </div>
    </div>
</body>
</html>