<?php
include "modelo/conexion.php";
include "controlador/editar_registro.php";
$id=$_GET["id"];


$sql = $conexion->query("select * from huespedes where ID=$id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="./show.css?v=<?pho echo time();?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7a02d54f8c.js" crossorigin="anonymous"></script>
   
    <script src="boostrap.js"></script>
    <!--importar el css-->
</head>

<body>

    <form action="./controlador/editar_registro.php"  method="POST">



       
            <div class="col-6">
                <h3>Editar registro</h3>
            </div>



            <?php
            
          
            $datos=$sql->fetch_object();
            if($datos){?>
   

   <input type="hidden" name="idEditar" value="<?=$_GET["id"]?>">
   
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre" value="<?=$datos->nombre?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" value="<?=$datos->direccion?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="<?=$datos->telefono?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad" value="<?=$datos->edad?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de habitacion</label>
                <input type="text" class="form-control" name="numHabitaciones" value="<?=$datos->num_habitacion?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo habitacion</label>
                <input type="text" class="form-control" name="tipoHabitacion" value="<?=$datos->tipo_hab?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha ingreso</label>
                <input type="date" class="form-control" name="fechaIngreso" value="<?=$datos->fecha_ingreso?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de noches</label>
                <input type="text" class="form-control" name="numNoches" value="<?=$datos->num_noches?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estatus</label>
                <input type="text" class="form-control" name="estatus" value="<?=$datos->estatus?>">
            </div>


            <?php }
            ?>
            <br>
            <button type="submit" class="btn btn-warning" name="btnEditar" value="ok">Editar</button>
            <a href="tablaHuespedes.php" class="btn btn-danger" name="btnregistrar" value="ok">Cancelar</a>

    </form>


</body>

</html>