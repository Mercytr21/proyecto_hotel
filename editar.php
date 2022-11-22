<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("select * from producto where ID=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>EDITAR REGISTRO</title>
</head>

<body>

    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Editar Registro</h3>
       
       <?php

      $datos = $sql->fetch_object();
      if($datos){?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
            <input type="text" class="form-control" name="nombre" value="<?=$datos->nombre?>">
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
            <label for="exampleInputEmail1" class="form-label">Tipo habitacion</label>
            <input type="text" class="form-control" name="tipoHabitacion">
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

        <?php }
        ?>



        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>

</body>

</html>