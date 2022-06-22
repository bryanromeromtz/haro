<?php

    include("apis/conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "INSERT INTO archivero SELECT * FROM dato_vehiculo WHERE id='$id'";

        $result = mysqli_query($conex,$query);

        if(!$result){
            die("no se pudo archivar");
        }else {
            $query = "DELETE FROM dato_vehiculo where dato_vehiculo.id = $id";
            $result = mysqli_query($conex,$query);
            $_SESSION['message'] = 'guardado correctamente';
            $_SESSION['message-type'] = 'danger';
            header("Location: mostrar.php");
        }
    }

?>