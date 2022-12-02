<?php

if (!empty($_POST["btnregistrar"])) {
    if (
        !empty($_POST["nombre"])
        and !empty($_POST["direccion"])
        and !empty($_POST["telefono"])
        and !empty($_POST["edad"])
        and !empty($_POST["numHabitaciones"])
        and !empty($_POST["tipoHabitacion"])
        and !empty($_POST["fechaIngreso"])
        and !empty($_POST["numNoches"])
        and !empty($_POST["estatus"])
    ) {

        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $edad = $_POST["edad"];
        $numHabitaciones = $_POST["numHabitaciones"];
        $tipoHabitacion = $_POST["tipoHabitacion"];
        $fechaIngreso = $_POST["fechaIngreso"];
        $numNoches = $_POST["numNoches"];
        $estatus = $_POST["estatus"];

        $checarEstatus = $conexion->query("CAll validarHabitacion('$numHabitaciones')");
        $fila = mysqli_fetch_array($checarEstatus, MYSQLI_ASSOC);
        //print_r($fila);

       
        if ($fila["checarEstatusHabitacion(num_habitacion)"] == "ocupado") {
            echo '<script>alert("habitacion ocupada")</script>';

            //mysqli_free_result($checarEstatus);
           // mysqli_next_result($checarEstatus);
        } else {

            //INGRESAR AL SP DE CHECKIN HUESPED

            mysqli_free_result($checarEstatus);
            mysqli_next_result($conexion);

            $sql = $conexion->query("CALL checkinHuesped ('$nombre','$direccion','$telefono','$edad','$numHabitaciones','$tipoHabitacion','$fechaIngreso','$numNoches','','$estatus')");
            print_r($sql);
            if ($sql == 1) {
                header("location:../proyecto_hotel/tablaHuespedes.php");
            } else {
                echo '<div class="alert alert-danger">ERROR AL REGISTRAR</div>';
                print_r($sql);
            }




        }

    } else {
        echo '<div class="alert alert-warning"> ALGUNO DE LOS CAMPOS ESTA VACIO</div>';
    }

}

?>