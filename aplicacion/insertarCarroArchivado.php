<?php

    include("../apis/conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "INSERT INTO dato_vehiculo SELECT * FROM archivero WHERE id='$id'";

        $result = mysqli_query($conex,$query);

        if(!$result){
            die("no se pudo activar");
        }else {
            $query = "DELETE FROM archivero where archivero.id = $id";
            $result = mysqli_query($conex,$query);
            $_SESSION['message'] = 'guardado correctamente';
            $_SESSION['message-type'] = 'danger';
            header("Location: ../mostrar.php");
        }
    }

?>