<?php


 if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from huespedes where ID=$id");

    if($sql==1){
        echo '<div >PERSONA ELIMINDAD</div>';
    }else{
        echo '<div >ERROR</div>';
    }
 }

?>