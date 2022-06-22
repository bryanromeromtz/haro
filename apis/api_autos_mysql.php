<?php
$servername = "localhost";
$database = "seminuevosharo";
$username = "root";
$password = "";

// Create connection
try {
    //$conexion = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    $conexion = mysqli_connect($servername, $database, $username, $password);
    if($conexion){
        echo "Conectado... a sistema";
    }
}catch( Exception $ex){
    echo $ex->getMessage();
}

$consulta= "SELECT * FROM seminuevosharo";

$datos = mysqli_query($conexion, $consulta);
    //$fila = mysqli_fetch_array ($datos);
    if($datos){
        while($row = $datos->fetch_array()){
                $nombre = $row["nombre"];
                $apellido = $row["apellido"];
                //$id = $row["id"];
                //$marca = $row["marca"];
                //$categoria = $row["categoria"];
                //$modelo = $row["modelo"];
                //$estado = $row["estado"];
                //$color = $row["color"];
                //$transmision = $row["transmision"];
                //$interiores = $row["interiores"];
                //$ano = $row["ano"];
                //$precio = $row["precio"];
                //$foto = $row["foto"];
                //$ciudad = $row["ciudad"];
                ?>
                <h1>nombre:</h1>
                <p><?php echo $nombre ?></p>
                <p><?php echo $apellido ?></p>
                <?php

        }
    }
   
?>