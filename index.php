<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-4">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7a02d54f8c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="diseño.css">
  <!--importar el css-->


<body>
  <h1 class="text-center p-3"> HOTEL PARADISE | CONTROL HUESPEDES</h1>



  <!-- FORM -->
  <div class="container-fluid-row">

    <form class="col-4 p-3 m-auto" method="POST">
      <h3 class="text-center text-secondary">Registro de Huesped</h3>
      <?php
 include "modelo/conexion.php";
 
      include "controlador/registro_huesped.php";
      include "controlador/checkout_huesped.php";
      include "controlador/eliminar_registro.php";
      ?>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
        <input type="text" class="form-control" name="nombre">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Edad</label>
        <input type="text" class="form-control" name="edad">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Numero de habitacion</label>
        <input type="text" class="form-control" name="numHabitaciones">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Fecha ingreso</label>
        <input type="date" class="form-control" name="fechaIngreso">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Numero de noches</label>
        <input type="text" class="form-control" name="numNoches">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Estatus</label>
        <input type="text" class="form-control" name="estatus">
      </div>
      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>


    <!-- Tabla -->
    <div class="col-10 p-4 m-auto">
      <table class="table">
        <thead class="bg-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">EDAD</th>
            <th scope="col">NUM HABITACION</th>
            <th scope="col">FECHA INGRESO</th>
            <th scope="col">NUM NOCHES</th>
            <th scope="col">FECHA SALIDA</th>
            <th scope="col">ESTATUS</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <?php
          include "modelo/conexion.php";
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
            <td>
              <a href="checkout.php?id=<?= $datos->ID ?>" class="btn btn-small btn-warning"><i
                  class="fa-solid fa-pen-to-square"></i></a>
            </td>
            <td><a href="eliminar_registro.php?id=<?= $datos->ID ?>" class="btn btn-small btn-danger"><i
                  class="fa-solid fa-trash"></i></a></td>
          </tr>



          <?php }
          ?>




        </tbody>
      </table>
    </div>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>