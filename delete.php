<?php

    include("apis/conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM dato_vehiculo where dato_vehiculo.id = $id";
        $result = mysqli_query($conex,$query);

        if(!$result){
            die("no se pudo eliminar");
        }else {
            $_SESSION['message'] = 'eliminado correctamente';
            $_SESSION['message-type'] = 'danger';
            header("Location: mostrar.php");
        }
    }

?>