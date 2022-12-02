<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto Mercy</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7a02d54f8c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="index.css">
  <script src="boostrap.js"></script>
  <!--importar el css-->
</head>

<body>


  <!--NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a id="tituloNavbar" class="navbar-brand" href="#">The Tree Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.php">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tablaHuespedes.php">Huespedes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="habitaciones.php">Habitaciones</a>
          </li>
         
         
          
        </ul>
      </div>
    </div>
  </nav>




  <!--CAROUSEL -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div id="divImagen1" class="carousel-item active">
        <img id="imagen1" src="https://cdn.pixabay.com/photo/2019/06/26/18/50/couple-4300983_960_720.jpg"
          class="d-block w-100" alt="...">
        <div id="texto1" class="carousel-caption d-none d-md-block">
          <h1>CONECTA CON LA NATURALEZA</h1>
        </div>
      </div>
      <div id="divImagen2" class="carousel-item">
        <img id="imagen" src="https://cdn.pixabay.com/photo/2017/03/27/15/02/couple-2179256_960_720.jpg"
          class="d-block w-100" alt="...">
          <div id="texto2" class="carousel-caption d-none d-md-block">
          <h1>THE BEST PLACE TO RELAX</h1>
        </div>
      </div>
      <div id="divImagen3" class="carousel-item">
        <img id="imagen3" src="https://cdn.pixabay.com/photo/2017/03/27/14/14/coffee-2179009_960_720.jpg"
          class="d-block w-100" alt="...">
          <div id="texto1" class="carousel-caption d-none d-md-block">
          <h1>COMODIDAD DEL HOGAR</h1>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>





  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer>
  <h6>©2022 The tree hotel</h6>
</footer>

</html>