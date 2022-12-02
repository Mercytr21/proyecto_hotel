<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The tree hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7a02d54f8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./habitaciones.css?v=<?pho echo time();?>">
    <script src="boostrap.js"></script>
    <!--importar el css-->



</head>

<body>




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
                        <a class="nav-link" href="tablaHuespedes.php">Huespedes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Habitaciones</a>
                    </li>
            </div>
        </div>
    </nav>




    <h1 class="text">Habitaciones</h1>




    <!-- FORM -->
    <div class="container">
        <?php
        include "modelo/conexion.php";
        ?>
        <!-- Tabla -->
        <div class="col-6 m-2">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Estatus</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $sql = $conexion->query("select * from habitaciones");
                    while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <td>
                            <?= $datos->num_habitacion ?>
                        </td>
                        <td>
                            <?= $datos->ubicacion ?>
                        </td>
                       
                        <td>
                            <?= $datos->tipo ?>
                        </td>
                        <td>
                            <?= $datos->estatus ?>
                        </td>
                    </tr>

                    <?php }
                    ?>

                </tbody>
            </table>
            <!--BOTON EDITAR-->
            <a href="index.php" id="boton1" class="btn btn-small btn-warning">Regresar</a>

        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer>
    <h6>©2022 The tree hotel</h6>
</footer>

</html>