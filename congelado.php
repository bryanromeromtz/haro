<?php

    include("apis/conexion.php");
    $congelado = $_GET['congelado'];

if($congelado != 'si'){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
       // $query2 = "SELECT * FROM dato_vehiculo WHERE id='$id' AND congelado = 'si'"

        $query = "UPDATE dato_vehiculo SET congelado = 'si'  WHERE id='$id'";

        $result = mysqli_query($conex,$query);

        if(!$result){
            die("congelado");
            //$query = "SELECT * FROM dato_vehiculos WHERE congelados = 'si' AND id='$id'";
        }else {
            $result = mysqli_query($conex,$query);           
            $_SESSION['message'] = 'guardado correctamente';
            $_SESSION['message-type'] = 'danger';
            header("Location: mostrar.php");
        }
    }
}else {
    if(isset($_GET['id'])){
        $id = $_GET['id'];
       // $query2 = "SELECT * FROM dato_vehiculo WHERE id='$id' AND congelado = 'si'"

        $query = "UPDATE dato_vehiculo SET congelado = 'no'  WHERE id='$id'";

        $result = mysqli_query($conex,$query);

        if(!$result){
            die("congelado");
        }else {
            $result = mysqli_query($conex,$query);
            $_SESSION['message'] = 'guardado correctamente';
            $_SESSION['message-type'] = 'danger';
            header("Location: mostrar.php");
        }
    }
}
    

?>