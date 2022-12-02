<?php

if (!empty($_POST["btnEditar"])) {
    
    if (!empty($_POST["nombre"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) 
     and !empty($_POST["edad"]) and !empty($_POST["numHabitaciones"]) and
    !empty($_POST["tipoHabitacion"]) and !empty($_POST["fechaIngreso"])
     and !empty($_POST["numNoches"]) and !empty($_POST["estatus"]) ) {
        
        $idEditar = $_POST["idEditar"];
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $edad = $_POST["edad"];
        $numHabitaciones=$_POST["numHabitaciones"];
        $tipoHabitacion = $_POST["tipoHabitacion"];
        $fechaIngreso = $_POST["fechaIngreso"];
        $numNoches = $_POST["numNoches"];
        $estatus = $_POST["estatus"];
         echo $nombre;
         echo $direccion;
         echo $telefono;
         echo $edad;
         echo $numHabitaciones;
         echo $tipoHabitacion;
         echo $fechaIngreso;
         echo $numNoches;
         echo $estatus;

         $fechaString= strval($fechaIngreso);


        include "../modelo/conexion.php";

        $sql = $conexion->query(" update huespedes set nombre='$nombre', direccion='$direccion', telefono='$telefono',
         edad='$edad', num_habitacion='$numHabitaciones', tipo_hab='$tipoHabitacion', fecha_ingreso='$fechaString', num_noches='$numNoches', 
        estatus='$estatus' where ID=$idEditar");


     if($sql==1){
        
        header("location:../tablaHuespedes.php");
     }else{
        echo '<div class="alert alert-danger">ERROR AL EDITAR</div>';
     }


    } else {
        echo '<div class="alert alert-success">CAMPOS VACIOS</div>';
    }

}
?>