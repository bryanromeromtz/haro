<?php

include("../apis/conexion.php");
$vendedor = $_POST["vendedor"];
$marca = $_POST["marca"];
$tipo = $_POST["tipo"];
$color = $_POST["color"];
$ano = $_POST["ano"];
$transmision = $_POST["transmision"];
$precio = $_POST["precio"];
$telefono = $_POST["telefono"];
$cilindros = $_POST["cilindros"];
$kilometraje = $_POST["kilometraje"];
$combustible = $_POST["combustible"];
$interior = $_POST["interior"];
$foto = addslashes(file_get_contents($_FILES["foto"]["tmp_name"]));

$titulo = $_POST["titulo"];

$arrayFotos = array();
foreach($_FILES['listaFotos']['tmp_name'] as $key => $tmp_name){
    //var_dump($_FILES['listaFotos']);
    $lista_nombre_imagen = $_FILES['listaFotos']['name'][$key];
    $temporal = $_FILES['listaFotos']['tmp_name'][$key];
    $lista_tipo_imagen=$_FILES['listaFotos']['type'][$key];
    $lista_tamagno_imagen=$_FILES['listaFotos']['size'][$key];
    if($lista_tamagno_imagen <= 100000){
        if($lista_tipo_imagen=="image/jpeg" || $lista_tipo_imagen=="image/jpg" || $lista_tipo_imagen=="image/png"){
            //$_SERVER['DOCUMENT_ROOT'] .
            $directorio = '../img_servidor/lista_fotos';
            
            $ruta = $directorio.'/'.$lista_nombre_imagen;
            if(move_uploaded_file($temporal, $ruta)){
                //move_uploaded_file($_FILES['listaFotos']['tmp_name'],$directorio.$lista_nombre_imagen);
                array_push($arrayFotos,$lista_nombre_imagen);
                echo "la imagen $lista_nombre_imagen se guardo correctamente";
            }else{
                echo "error";
            }
        }else {
            echo "Solo se pueden subir imágenes jpeg/jpg/png ";
        }
    }else {
        echo "El tamaño de la imagen es demasiado grande";
    }   
}

$listaFoto1 = $arrayFotos[0];
$listaFoto2 = $arrayFotos[1];
$listaFoto3 = $arrayFotos[2];
$listaFoto4 = $arrayFotos[3];
$listaFoto5 = $arrayFotos[4];
$listaFoto6 = $arrayFotos[5];
$listaFoto7 = $arrayFotos[6];
$listaFoto8 = $arrayFotos[7];
$listaFoto9 = $arrayFotos[8];
$listaFoto10 = $arrayFotos[9];
$listaFoto11 = $arrayFotos[10];
$listaFoto12 = $arrayFotos[11];
$listaFoto13 = $arrayFotos[12];
$listaFoto14 = $arrayFotos[13];
$listaFoto15 = $arrayFotos[14];

//Recibimos los datos de la imagen
$nombre_imagen = $_FILES['foto']['name'];
$tipo_imagen=$_FILES['foto']['type'];
$tamagno_imagen=$_FILES['foto']['size'];
$temporall = $_FILES['foto']['tmp_name'];
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

$query = "INSERT INTO dato_vehiculo(vendedor,marca,tipo,color,foto,transmision,ano,precio,telefono,cilindros,kilometraje,combustible,listaFoto1,listaFoto2,listaFoto3,listaFoto4,listaFoto5,listaFoto6,listaFoto7,listaFoto8,listaFoto9,listaFoto10,listaFoto11,listaFoto12,listaFoto13,listaFoto14,listaFoto15,titulo,interior) 
VALUES ('$vendedor','$marca','$tipo','$color','$nombre_imagen','$transmision','$ano','$precio','$telefono','$cilindros','$kilometraje','$combustible','$listaFoto1','$listaFoto2','$listaFoto3','$listaFoto4','$listaFoto5','$listaFoto6','$listaFoto7','$listaFoto8','$listaFoto9','$listaFoto10','$listaFoto11','$listaFoto12','$listaFoto13','$listaFoto14','$listaFoto15','$titulo','$interior')";
$resultado = $conex->query($query);
//$resultado = mysqli_query($conex,$query);

if($resultado){
    echo "si se inserto";
    //header('Location: http://pruebas.seminuevosharo.mx/mostrar.php');
    ?>
        <script>
            location.href = "https://pruebas.seminuevosharo.mx/mostrar.php";
        </script>
    <?php
}else
    echo "no se inserto";
    ?>

