<?php
include "modelo/conexion.php";
include "controlador/show_hospedados.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKOUT HUESPED</title>
    <link rel="stylesheet" href="./show.css?v=<?pho echo time();?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
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


    <!--<form action="./controlador/show_hospedados.php" method="get">-->

        <!-- FORM SHOW -->
        <div class="container">
            <?php

    ?>
            <!-- Tabla SHOW-->
            <div class="col-6 m-2">

                <tbody>

                    <?php
                //print_r($conexion);
                    //mysqli_free_result($conexion);
                  // mysqli_next_result($conexion);
        $sql = $conexion->query("select * from tipohuesped");
                    //print_r($sql);
        while ($datos = $sql->fetch_object()) { ?>

                    <input type="hidden" name="numeroEstatus" value="<?= $_GET["num_estatus"] ?>">

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
    <!--</form>-->




    <!-- FORM TABLA-->
    <div class="container">

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


                    </tr>
                </thead>
                <tbody>

                    <?php
                    $numeroEstatus = $_GET["num_estatus"];

                    $sql = $conexion->query("CALL showHuespedes ($numeroEstatus)");
                    if ($sql) {
                        $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
                      
                        foreach( $data as $datos ) { ?>
                    <tr>
                        <td>
                            <?= $datos["ID"] ?>
                        </td>
                        <td>
                            <?= $datos["nombre"]?>
                        </td>
                        <td>
                            <?= $datos["direccion"] ?>
                        </td>
                        <td>
                            <?= $datos["telefono"] ?>
                        </td>
                        <td>
                            <?= $datos["edad"] ?>
                        </td>
                        <td>
                            <?= $datos["num_habitacion"]?>
                        </td>
                        <td>
                            <?= $datos["tipo_hab"] ?>
                        </td>
                        <td>
                            <?= $datos["fecha_ingreso"] ?>
                        </td>
                        <td>
                            <?= $datos["num_noches"] ?>
                        </td>
                        <td>
                            <?= $datos["fecha_salida"] ?>
                        </td>
                        <td>
                            <?= $datos["estatus"]?>
                        </td>

                    </tr>

                    <?php }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    </form>


</body>

</html>