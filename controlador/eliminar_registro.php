<?php

 if(!empty($_GET["id"])){
    $id=$_GET["id"];


    $sql=$conexion->query("delete from huespedes where ID=$id" );
    

    if($sql==1){
       
        echo '<div class="alert alert-success">PERSONA ELIMINADA</div>';
    }else{

        echo '<div class="alert alert-success">NO  ELIMINADA</div>';
        
    }
 }

?>