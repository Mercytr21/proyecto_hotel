<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-4">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The tree hotel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7a02d54f8c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./tablaHuespedes.css">
  <script src="boostrap.js"></script>
  <!--importar el css-->

</head>

<body class="body1">



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
            <a class="nav-link" href="registro.php">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Huespedes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="habitaciones.php">Habitaciones</a>
          </li>
      </div>
    </div>
  </nav>





  <h1 class="text">Huespedes</h1>

  <!--AGREGAMOS FUNCION eliminar EN BOTONes -->
  <script>function eliminar() {
      var respuesta = confirm("¿Desea eliminar el registro?")
      return respuesta;
    }</script>


  <!-- FORM -->
  <div class="container">



    <?php

      include "modelo/conexion.php";

      include "controlador/eliminar_registro.php";
      include "controlador/show_hospedados.php";
      ?>



    <!-- Tabla -->
    <div class="col m-auto">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">EDAD</th>
            <th scope="col">NUM HABITACION</th>
            <th scope="col">TIPO HABITACION</th>
            <th scope="col">FECHA INGRESO</th>
            <th scope="col">NUM NOCHES</th>
            <th scope="col">FECHA SALIDA</th>
            <th scope="col">ESTATUS</th>
            <th scope="col">CHECK OUT</th>

            <th scope="col"></th>

            <th scope="col"></th>


          </tr>
        </thead>
        <tbody>

          <?php

          $sql = $conexion->query("select * from huespedes");
          while ($datos = $sql->fetch_object()) { ?>
          <tr>
            <td>
              <?= $datos->ID ?>
            </td>
            <td>
              <?= $datos->nombre ?>
            </td>
            <td>
              <?= $datos->direccion ?>
            </td>
            <td>
              <?= $datos->telefono ?>
            </td>
            <td>
              <?= $datos->edad ?>
            </td>
            <td>
              <?= $datos->num_habitacion ?>
            </td>
            <td>
              <?= $datos->tipo_hab ?>
            </td>
            <td>
              <?= $datos->fecha_ingreso ?>
            </td>
            <td>
              <?= $datos->num_noches ?>
            </td>
            <td>
              <?= $datos->fecha_salida ?>
            </td>
            <td>
              <?= $datos->estatus ?>
            </td>
            <!--BOTON CHECKOUT-->
            <td>
              <a href="checkout.php?id=<?= $datos->ID ?>" class="btn btn-small btn-secondary"><i
                  class="fa-solid fa-right-from-bracket"></i></a>
            </td>
            <!--BOTON ELIMINAR-->
            <td><a onclick="return eliminar()" href="tablaHuespedes.php?id=<?= $datos->ID ?>"
                class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a></td>

            <td>
              <!--BOTON EDITAR-->
              <a href="editar.php?id=<?= $datos->ID ?>" class="btn btn-small btn-warning"><i
                  class="fa-solid fa-pen-to-square"></i></a>
            </td>
          </tr>



          <?php }
          ?>




        </tbody>
      </table>
    </div>
  </div>

  <form action="./controlador/show_hospedados.php">

    <!-- FORM SHOW -->
    <div class="container">
      <?php


    ?>
      <!-- Tabla SHOW-->
      <div class="col-6 m-2">

        <tbody>

          <?php

        $sql = $conexion->query("select * from tipohuesped");
        while ($datos = $sql->fetch_object()) { ?>


          <a href="show_hospedados.php?num_estatus=<?= $datos->num_estatus ?>" name="btnshow"
            class="btn btn-small btn-warning">
            <?= $datos->descripcion ?>
          </a>



          <?php }
        ?>

        </tbody>
        </table>


      </div>
    </div>
  </form>



  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer>
  <h6>©2022 The tree hotel</h6>
</footer>

</html>