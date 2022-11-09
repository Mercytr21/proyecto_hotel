<?php

if (!empty($_POST["btnCheckout"])) {
    if (!empty($_POST["idHuesped"])
        and !empty($_POST["fechaSalida"])) {

        $idHuesped = $_POST["idHuesped"];
        $fechaSalida = $_POST["fechaSalida"];
        
       
        //INGRESAR AL SP DE CHECKIN HUESPED
        $sql= $conexion->query("CALL checkoutHuesped ('$idHuesped','$fechaSalida')");
            if($sql==1){
                echo '<div class="alert alert-success">SALIDA REGISTRADA</div>';
            }else{
                echo '<div class="alert alert-danger">ERROR AL REGISTRAR</div>';
            }




    } else {
        echo '<div class="alert alert-warning"> ALGUNO DE LOS CAMPOS ESTA VACIO</div>';
    }
}

?>