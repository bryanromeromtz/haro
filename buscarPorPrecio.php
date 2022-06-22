<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>

    <div class="container" style="position: relative;z-index: 100; width: 100%;">
      <div class="row" style="width: 100%;">
        <div class="col-3 text-left">
          <img src="fotos/haro-logo.png" style=" width: 100%;">
        </div>
          
          <div class="col-3 text-center" style="margin-top: 1%;" >
              <a href="http://pruebas.seminuevosharo.mx/index.php" style="text-decoration: none;font-size: 25px;">Inicio</a>
          </div>
          <div class="col-3 text-center" style="margin-top: 1%;">
            <a href="http://pruebas.seminuevosharo.mx/index.php#tema1" style="text-decoration: none;font-size: 25px;">Vehiculos</a>
          </div>
          <div class="col-3 text-center" style="margin-top: 1%;">
              <a href="#" style="text-decoration: none;font-size: 25px;"></a>
          </div>
            
      </div>
    </div>
</head>
<body >
    
<?php

include("apis/conexion.php");
//$query = "SELECT * FROM dato_vehiculo WHERE titulo LIKE  '%$busqueda%'";

if (isset($_GET['enviarPrecio'])) {
   $precio_min = $_GET['precio_min'];
   $precio_max = $_GET['precio_max'];
   $consultaPrecio = "SELECT * FROM dato_vehiculo";
   $resultado = mysqli_query($conex,$consultaPrecio);
    //var_dump($resultado);
    ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11">
          <div class='row justify-content-center' id='bloque1' >
    <?php

            while($row = mysqli_fetch_array($resultado)){
                $precio = $row["precio"];
                if($precio >= $precio_min && $precio <= $precio_max){
                $titulo = $row["titulo"];
                $imagen = $row["foto"];
                $resArray =  " 
                        <div class='col-10 col-md-6 col-lg-3' style='margin-top: 5%;text-align:center;'>
                            <a href='http://pruebas.seminuevosharo.mx/inventario/carros.php/?titulo=$titulo'>
                                <div class='card' >
                                    <img class='card-img-top' src='img_servidor/$imagen'>
                                    <div class='card-body'>
                                        <h5 class='card-title' style='height: 55px;'>$titulo </h5><br>
                                        <p class='card-text' >$ $precio </p>
                                    </div>
                                </div>
                            </a>
                            </div>";
                            echo ($resArray);
                }
            }
        }
?>
            </div>
        </div>
    </div>
</div>
</body>
</html>