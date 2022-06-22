<?php

include("../apis/conexion.php");
$vendedorAutos = $_POST["vendedorAutos"];
$telefonoVendedor = $_POST["telefonoVendedor"];

$query = "INSERT INTO vendedores(vendedorAutos,telefonoVendedor) VALUES ('$vendedorAutos','$telefonoVendedor')";
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