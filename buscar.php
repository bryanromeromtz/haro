<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/5764f4dea0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pruebas.seminuevosharo.mx/letra.css">
    <link rel="stylesheet" href="https://pruebas.seminuevosharo.mx/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script "text/javascript" src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
   
    <title></title>
    <style>
      @media (min-width: 320px) {
        .carousel-item {
              height: 90%;
              min-height: 200px;
              max-height: 200px;
              background: no-repeat scroll center scroll;
              background-size: cover;
        }
        .carousel-inner .carousel-item img {
          width:90% !important ;
          margin-left:5%;
          height:90%;
          min-height: 200px;
          max-height: 200px;
        }
        .tamaño{
          min-height: 280px;
          max-height: 280px;
        }
        .titulo-card{
          height: 45px;
        }
        .tamanoImagen{
          min-height: 180px;
          max-height: 180px;
        }
      }
      @media (min-width: 370px) {
        .carousel-item {
              height: 90%;
              min-height: 250px;
              max-height: 250px;
              background: no-repeat scroll center scroll;
              background-size: cover;
        }
        .carousel-inner .carousel-item img {
          width:90% !important ;
          margin-left:5%;
          height:90%;
          min-height: 250px;
          max-height: 250px;
        }
        .tamaño{
          min-height: 280px;
          max-height: 280px;
        }
        .titulo-card{
          height: 45px;
        }
      }
      @media (min-width: 400px) {
        .carousel-item {
              height: 90%;
              min-height: 280px;
              max-height: 280px;
              background: no-repeat scroll center scroll;
              background-size: cover;
        }
        .carousel-inner .carousel-item img {
          width:90% !important ;
          margin-left:5%;
          height:90%;
          min-height: 280px;
          max-height: 280px;
        }
        .tamaño{
          min-height: 310px;
          max-height: 310px;
        }
        .titulo-card{
          height: 36px;
        }
        .tamanoImagen{
          min-height: 220px;
          max-height: 220px;
        }
      }

      @media (min-width: 450px) {
        .carousel-item {
              height: 80%;
              min-height: 250px;
              max-height: 250px;
              background: no-repeat scroll center scroll;
              background-size: cover;
        }
        .carousel-inner .carousel-item img {
          width:80% !important ;
          margin-left:10%;
          height:80%;
        }
        .contenedorAuto{
          position: absolute;
        }
        #tituloAuto{
          color: rgb(238, 2, 2); font-size: 12px; margin-top: -90%; margin-left: 7%;
        }
        .pAuto1{
          margin-top:1%; font-size: 10px; margin-left: 6%;
        }
        .pAuto2{
          margin-top:-1%; font-size: 10px; margin-left: 7%;
        }
        .bAuto{
          margin-top:1%; margin-left: 20%;
        }
      }

      @media (min-width: 601px) {
        .carousel-item {
              height: 80%;
              min-height: 350px;
              max-height: 350px;
              background: no-repeat scroll center scroll;
              background-size: cover;
        }
        .carousel-inner .carousel-item img {
          width:80% !important ;
          margin-left:10%;
          height:80%;
        }
        .tamaño{
          min-height: 435px;
          max-height: 435px;
        }
        .tamanoImagen{
          min-height: 340px;
          max-height: 340px;
        }
      }

      @media (min-width: 701px) {
        .carousel-item {
              height: 70%;
              min-height: 470px;
              max-height: 470px;
              background: no-repeat scroll center scroll;
              background-size: cover;
        }
        .carousel-inner .carousel-item img {
          width:90% !important ;
          margin-left:5%;
          height:70%;
          min-height: 470px;
          max-height: 470px;
        }
        
        .tamaño{
          min-height: 480px;
          max-height: 480px;
        }

      }

      @media (min-width: 768px) {
        .carousel-item {
              height: 80%;
              min-height: 410px;
              max-height: 410px;
              background: no-repeat scroll center scroll;
              background-size: cover;
        }
        .carousel-inner .carousel-item img {
          width:80% !important ;
          margin-left:10%;
          height:80%;
        }
        .tamaño{
          min-height: 295px;
          max-height: 295px;
        }
        .titulo-card{
          height: 40px;
        }
        .tamanoImagen{
          min-height: 205px;
          max-height: 205px;
        }
      }
      @media (min-width: 991px) {
        .carousel-item {
              height: 80%;
              min-height: 550px;
              max-height: 550px;
              background: no-repeat scroll center scroll;
              background-size: cover;
        }
        .carousel-inner .carousel-item img {
          width:80% !important ;
          margin-left:10%;
          height:80%;
          min-height: 620px;
          max-height: 620px;
        }
        .tamaño{
          min-height: 220px;
          max-height: 220px;
        }
        .tamanoImagen{
          min-height: 130px;
          max-height: 130px;
        }
        
      }

      @media (min-width: 1350px) {
        
        .titulo-card{
          min-height: 40px;
        }
        .tamaño{
          min-height: 290px;
          max-height: 290px;
        }
        .tamanoImagen{
          min-height: 190px;
          max-height: 190px;
        }
      }
      @media (min-width: 1700px) {
        .tamaño{
          min-height: 350px;
          max-height: 350px;
        }
        .tamanoImagen{
          min-height: 260px;
          max-height: 260px;
        }
        .titulo-card{
          height: 30px;
        }
        
      }
      @media (min-width: 2000px) {
        .carousel-item {
              height: 50%;
              min-height: 670px;
              max-height: 670px;
              background: no-repeat scroll center scroll;
              background-size: cover;
        }
        .carousel-inner .carousel-item img {
          width:50% !important ;
          margin-left:30%;
          min-height: 750px;
          max-height: 750px;
        }
        .tamaño{
          min-height: 420px;
          max-height: 420px;
        }
      }
     
    </style>

    <div class="container" style="position: relative;z-index: 100; width: 100%;">
      <div class="row" style="width: 100%;">
      <div class="col-3 text-left">
          <img src="http://pruebas.seminuevosharo.mx/fotos/haro-logo.png" style="position: absolute; width: 25%;">
        </div>
          
        <div class="col-1 d-none d-md-block text-center" style="margin-top: 1%;">
              <a href="#" style="text-decoration: none;font-size: 25px;"></a>
          </div>
          <div class="col-4 col-md-3 text-center" style="margin-top: 1%;" >
              <a href="https://pruebas.seminuevosharo.mx/index.php" class="letraInicio" style="text-decoration: none;"><i class="fa-solid fa-house tamañoIcono"></i> Inicio</a>
          </div>
          <div class="col-5 col-md-3 text-center" style="margin-top: 1%;">
            <a href="#tema1" class="letraInicio" style="text-decoration: none;"><i class="fa-solid fa-car tamañoIcono"></i> Vehículos</a>
          </div>
          <div class="col-2 d-none d-md-block text-center" style="margin-top: 1%;">
              <a href="#" style="text-decoration: none;font-size: 25px;"></a>
          </div>
            
      </div>
    </div>
</head>
<body >
    

<?php

include("apis/conexion.php");
//$query = "SELECT * FROM dato_vehiculo WHERE titulo LIKE  '%$busqueda%'";
if (isset($_GET['enviar'])) {
   $precio_min = $_GET['precio_min'];
   $precio_max = $_GET['precio_max'];
   $busqueda = $_GET['busqueda'];
   $consulta = "SELECT * FROM dato_vehiculo WHERE titulo LIKE'%$busqueda%' OR marca like'%$busqueda%' and (precio BETWEEN '$precio_min' and '$precio_max')";
   $resultado = mysqli_query($conex,$consulta);
    //var_dump($resultado);
    ?>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-11">
          <div class='row justify-content-center' id='bloque1' >
    <?php

                              while($row = mysqli_fetch_array($resultado)){
                                $titulo = $row["titulo"];
                                $imagen = $row["foto"];
                                $precio = number_format($row["precio"],0,'.',',');  
                                if($precio >= $precio_min && $precio <= $precio_max){
                                $tipo = $row["tipo"];  
                                $combustible = $row["combustible"]; 
                                $kilometraje = $row["kilometraje"]; 
                                $transmision = $row["transmision"];
                                  $resArray =  " 
                                  <div class='col-lg-3 col-md-6 mb-4 mb-lg-0' style='margin-top: 5%;text-align:center;'>
                                  <div class='card  text-white bg-dark border-0 rounded tamaño' >
                                        <a style='text-decoration:none;' href='http://pruebas.seminuevosharo.mx/inventario/carros.php/?titulo=$titulo'>
                                          <div class='card-body p-0' style='display: inline-block;position:relative;' >   
                                            <img class='w-100 card-img-top tamanoImagen' src='http://pruebas.seminuevosharo.mx/img_servidor/$imagen'>                           
                                                  <a href='http://pruebas.seminuevosharo.mx/inventario/carros.php/?titulo=$titulo' class='btn btn-danger ' style='position: absolute; bottom: 0; right: 1rem;'>$ $precio </a>
                                          </div> 
                                          
                                                <h5 class='card-title mt-2 titulo-card'>$titulo </h5>
                                                <ul class='list-inline'>
                                                    <li class='list-inline-item' style='font-size:12px;'><i class='fa-solid fa-car'></i><p style='font-size:9px;'>$tipo</p></li>
                                                    <li class='list-inline-item' style='font-size:12px;'><i class='fa-solid fa-gas-pump'></i><p style='font-size:9px;'>$combustible</p></li>
                                                    <li class='list-inline-item' style='font-size:12px;'><i class='fa-solid fa-road'></i><p style='font-size:9px;'>$kilometraje</p></li>
                                                    <li class='list-inline-item' style='font-size:12px;'><i class='fa-solid fa-road'></i><p style='font-size:9px;'>$transmision</p></li>
                                                </ul>
                                                                
                                        </a>
                                  </div>   

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