<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../IMG/Logo.jpg" alt="" srcset="" style="height: 80px; width: 100px "></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/CRUDINNERJOIN/index.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/CRUDINNERJOIN/PRODUCTO/index.php">PRODUCTO</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/CRUDINNERJOIN/PRODUCTO/index.php">OFERTA</a>
        </li>





        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/CRUDINNERJOIN/CLIENTE/cliente.php">CLIENTE</a>
        </li>




        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TABLAS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="/CRUDINNERJOIN/usuarios/usuarios.php">USUARIOS</a></li>
            <li><a class="dropdown-item" href="/CRUDINNERJOIN/roles/roles.php">ROLES</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/CRUDINNERJOIN/RelacionTablas/relacion.php">ROLES DE USUARIO</a></li>
          </ul>
        </li>
       
      </ul>
      
    </div>
    <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="BUSCAR">
        <button class="btn btn-primary" type="button">BUSCAR</button>
      </form>
  </div>


</nav>