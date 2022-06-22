<?php

include_once('admin_marcas.php');

$accion = $_POST['accion'];
$casoVerMarcas = "ver";
$casoVerUnMarca = "verUno";



function procesarVerMarcas()
{
    $marcas = $_GET['marcas'];
    $adminMarcas = new AdminMarcas();
    $arregloMarcas = $adminMarcas->getMarcas($marcas);
    echo json_encode($arregloMarcas);
}


switch ($accion) {
    case $casoVerMarcas:
        procesarVerMarcas();
        break;
    default:
        // echo "No se reconoce la accion";
        break;
}

procesarVerMarcas();
