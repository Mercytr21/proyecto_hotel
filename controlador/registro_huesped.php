<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"])
        and !empty($_POST["direccion"])
        and !empty($_POST["telefono"])
        and !empty($_POST["edad"])
        and !empty($_POST["numHabitaciones"])
        and !empty($_POST["tipoHabitacion"])
        and !empty($_POST["fechaIngreso"])
        and !empty($_POST["numNoches"])
        and !empty($_POST["estatus"])) {

        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $edad = $_POST["edad"];
        $numHabitaciones = $_POST["numHabitaciones"];
        $tipoHabitacion =$_POST["tipoHabitacion"];
        $fechaIngreso = $_POST["fechaIngreso"];
        $numNoches = $_POST["numNoches"];
        $estatus = $_POST["estatus"];
       
        //INGRESAR AL SP DE CHECKIN HUESPED
        $sql= $conexion->query("CALL checkinHuesped ('$nombre','$direccion','$telefono','$edad','$numHabitaciones','$tipoHabitacion','$fechaIngreso','$numNoches','','$estatus')");
            if($sql==1){
                echo '<div class="alert alert-success">PERSONA REGISTRADA</div>';
            }else{
                echo '<div class="alert alert-danger">ERROR AL REGISTRAR</div>';
            }




    } else {
        echo '<div class="alert alert-warning"> ALGUNO DE LOS CAMPOS ESTA VACIO</div>';
    }
}

?>