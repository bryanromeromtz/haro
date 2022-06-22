<?php

include("../apis/conexion.php");
//$favorito = addslashes(file_get_contents($_FILES["favorito"]["tmp_name"]));
//Recibimos los datos de la imagen
$nombre_imagen = $_FILES['favorito']['name'];
$tipo_imagen=$_FILES['favorito']['type'];
$tamagno_imagen=$_FILES['favorito']['size'];
$temporall = $_FILES['favorito']['tmp_name'];
//echo $tipo_imagen;
if($tamagno_imagen <= 100000){
    if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png"){
        //ruta de la carpeta destino en servidor
        $carpeta_destino='../img_servidor';
        $rutaImagen = $carpeta_destino. '/'.$nombre_imagen;
        //movemos la imagen del directorio temporal al directorio escogido
        if(move_uploaded_file($temporall, $rutaImagen)){
            echo "la imagen $nombre_imagen se guardo correctamente";
        }else{
            echo "error";
        }
    }else {
        echo "Solo se pueden subir imágenes jpeg/jpg/png ";
    }
}else {
    echo "El tamaño de la imagen es demasiado grande";
}

$query = "INSERT INTO favoritos(favorito) VALUES ('$nombre_imagen')";
$resultado = $conex->query($query);
//$resultado = mysqli_query($conex,$query);

if($resultado){
    echo "si se inserto";
    //header('Location: http://pruebas.seminuevosharo.mx/mostrar.php');
    ?>
        <script>
            location.href = "https://pruebas.seminuevosharo.mx/aplicacion/favoritos.php";
        </script>
    <?php
}else
    echo "no se inserto";
    ?>