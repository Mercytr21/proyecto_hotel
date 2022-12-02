<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registro</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7a02d54f8c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./registro.css?v=<?pho echo time();?>">
  <script src="boostrap.js"></script>
</head>


<body>
  <!--NAVBAR -->


  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">The Tree Hotel</a>
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
            <a class="nav-link" href="./index.php">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tablaHuespedes.php">Huespedes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="habitaciones.php">Habitaciones</a>
          </li>

      </div>
    </div>
  </nav>


  <!-- FORM -->
  <div class="row">

    <form method="POST">
      <div class="row">
        <div class="col-6">
          <h3>Registro de Huesped</h3>
        </div>

        <?php

        // Remover includes
        include "modelo/conexion.php";

        include "controlador/registro_huesped.php";
        //include "controlador/checkout_huesped.php";
        //include "controlador/eliminar_registro.php";
        //include "controlador/editar_registro.php";
        ?>




        <div class="col-6">

          <div class="row">


            <div class="col-5 px-2">

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de habitación</label>
                <!--<input type="text" class="form-control" name="numHabitaciones" required>-->

                <div>
                  <select class="form-select" name="numHabitaciones" required>
                    <option value="0">Seleccione:</option>
                    <?php
                    mysqli_free_result($conexion);
                    mysqli_next_result($conexion);

                    $sql = $conexion->query("select * from habitaciones");



                    while ($datos = $sql->fetch_object()) { ?>

                    <option value=<?= $datos->num_habitacion ?>> <?= $datos->num_habitacion ?>
                    </option>

                    <?php }

                    ?>
                  </select>
                </div>



              </div>



              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo habitación</label>
                <!-- <input type="text" class="form-control" name="tipoHabitacion" required>-->

                <div>
                  <select class="form-select" name="tipoHabitacion" required>
                    <option value="0">Seleccione:</option>
                    <option value="suite">suite</option>
                    <?php
                    ?>
                  </select>
                </div>
              </div>

            </div>




            <div class="col-5 px-2">

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha ingreso</label>
                <input type="date" class="form-control" name="fechaIngreso" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de noches</label>
                <input type="text" class="form-control" name="numNoches" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estatus</label>
                <!-- <input type="text" class="form-control" name="estatus" required>-->

                <div>
                  <select class="form-select" name="estatus" required>
                    <option value="0">Seleccione:</option>
                    <option value="ocupado">ocupado</option>
                    <?php
                    ?>
                  </select>
                </div>
              </div>





              <button type="submit" class="btn btn-warning" name="btnregistrar" value="ok">Registrar</button>
              <a href="index.php" class="btn btn-danger" name="btnregistrar" value="ok">Cancelar</a>
            </div>

            <div></div>
          </div>

        </div>
      </div>



    </form>



</body>

<footer>
  <h6>©2022 The tree hotel</h6>
</footer>

</html>