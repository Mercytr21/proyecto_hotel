<?php
      include "modelo/conexion.php";
    $id=$_GET["id"];
    $sql=$conexion->query("select huespedes.ID from huespedes where ID=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKOUT HUESPED</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <form action="./controlador/checkout_huesped.php" class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center alert alert-secondary">Checkout Huesped</h5>
        <?php
     
      include "controlador/checkout_huesped.php";
      ?>

        <?php
        $datos=$sql->fetch_object();
      if($datos){?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID del Huesped</label>
            <input type="text" class="form-control" name="idHuesped" value="<?=$datos->ID?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de salida</label>
            <input type="date" class="form-control" name="fechaSalida">
        </div>

        <?php }
      ?>


        <button type="submit" class="btn btn-primary" name="btnCheckout" value="ok">Guardar</button>
    </form>
</body>

</html>