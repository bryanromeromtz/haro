<?php

require 'apis/conexion.php';
$query = "SELECT * FROM dato_vehiculo WHERE congelado != 'si' ";

$datos = mysqli_query($conex, $query);
$arrayDatos = array();
$articulos_x_pagina = 8;
$row = mysqli_fetch_all($datos);
$total_articulos = count($row);
//echo $total_articulos;
$paginas = $total_articulos / 8;
$paginas = ceil($paginas);
//echo $paginas;
?>

<?php if (!$_GET) { ?>
  <!-- 
  <script>
    location.href = "https://pruebas.seminuevosharo.mx/index.php?pagina=1";
  </script> -->
<?php
}
$iniciar = ($_GET['pagina'] - 1) * $articulos_x_pagina;
//echo $iniciar;
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css' rel='stylesheet' type='text/css'>
  <script src="https://kit.fontawesome.com/5764f4dea0.js" crossorigin="anonymous"></script>
  <!-- codigo anterior -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--aqui termina el codigo anterior-->
  <link rel="stylesheet" href="https://pruebas.seminuevosharo.mx/style.css">
  <link rel="stylesheet" href="https://pruebas.seminuevosharo.mx/letra.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- links slider marcas-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script "text/javascript" src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <?php
  $url = "http://seminuevosharo.mx/json/api_autos.php";
  $json = file_get_contents($url);
  $dato = json_decode($json, true);
  //$conv = $dato["data"][0]["image"];
  $conv = $dato["data"];

  include("apis/conexion.php");
  ?>

  <div class="container" style="position: relative;z-index: 100; width: 100%;">
    <div class="row" style="width: 100%;">
      <div class="col-3 text-left mb-2">
        <img src="http://pruebas.seminuevosharo.mx/fotos/haro-logo.png" style="width:100px;">
      </div>

      <div class="col-1 d-none d-md-block text-center" style="margin-top: 1%;">
        <a href="#" style="text-decoration: none;font-size: 25px;"></a>
      </div>
      <div class="col-4 col-md-3 text-center" style="margin-top: 1%;">
        <a href="https://pruebas.seminuevosharo.mx/index.php" class="letraInicio" style="text-decoration: none;"><i class="fa-solid fa-house tamañoIcono"></i></a>
      </div>
      <div class="col-5 col-md-3 text-center" style="margin-top: 1%;">
        <a href="https://wa.me/+523310400283/?text=urlencodedtext" class="letraInicio" style="text-decoration: none;"><i class="fa-brands fa-whatsapp tamañoIcono"></i></a>
      </div>
      <div class="col-2 d-none d-md-block text-center" style="margin-top: 1%;">
        <a href="#" style="text-decoration: none;font-size: 25px;"></a>
      </div>

    </div>
  </div>
  <?php
  $query = "SELECT * FROM dato_vehiculo";
  //$resultado = $conex->query($query);
  //$row = $resultado->fetch_assoc();

  $datos = mysqli_query($conex, $query);
  $arrayDatos = array();

  $row = mysqli_fetch_array($datos);
  $UltimaImagen = $row['foto'];
  //var_dump($UltimaImagen);
  ?>

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
        width: 90% !important;
        margin-left: 5%;
        height: 90%;
        min-height: 200px;
        max-height: 200px;
      }

      .tamaño {
        min-height: 280px;
        max-height: 280px;
      }

      .titulo-card {
        height: 45px;
      }

      .tamanoImagen {
        min-height: 180px;
        max-height: 180px;
      }

      .tamanoLogo {
        min-height: 35px;
        max-height: 35px;
      }

      .hummer {
        margin-left: -20%;
        min-height: 25px;
        max-height: 25px;
        margin-top: 7px
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
        width: 95% !important;
        margin-left: 5%;
        height: 90%;
        min-height: 250px;
        max-height: 250px;
      }

      .tamaño {
        min-height: 280px;
        max-height: 280px;
      }

      .titulo-card {
        height: 45px;
      }

      .tamanoLogo {
        min-height: 45px;
        max-height: 45px;
      }

      .hummer {
        margin-left: -20%;
        min-height: 30px;
        max-height: 30px;
        margin-top: 7px
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
        width: 90% !important;
        margin-left: 5%;
        height: 90%;
        min-height: 280px;
        max-height: 280px;
      }

      .tamaño {
        min-height: 310px;
        max-height: 310px;
      }

      .titulo-card {
        height: 36px;
      }

      .tamanoImagen {
        min-height: 220px;
        max-height: 220px;
      }

      .tamanoLogo {
        min-height: 45px;
        max-height: 45px;
      }

      .hummer {
        min-height: 36px;
        max-height: 36px;
        margin-top: 5px
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
        width: 80% !important;
        margin-left: 10%;
        height: 80%;
      }

      .contenedorAuto {
        position: absolute;
      }

      #tituloAuto {
        color: rgb(238, 2, 2);
        font-size: 12px;
        margin-top: -90%;
        margin-left: 7%;
      }

      .pAuto1 {
        margin-top: 1%;
        font-size: 10px;
        margin-left: 6%;
      }

      .pAuto2 {
        margin-top: -1%;
        font-size: 10px;
        margin-left: 7%;
      }

      .bAuto {
        margin-top: 1%;
        margin-left: 20%;
      }

      .tamanoLogo {
        min-height: 45px;
        max-height: 45px;
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
        width: 80% !important;
        margin-left: 10%;
        height: 80%;
      }

      .tamaño {
        min-height: 435px;
        max-height: 435px;
      }

      .tamanoImagen {
        min-height: 340px;
        max-height: 340px;
      }

      .tamanoLogo {
        min-height: 45px;
        max-height: 45px;
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
        width: 90% !important;
        margin-left: 5%;
        height: 70%;
        min-height: 470px;
        max-height: 470px;
      }

      .tamaño {
        min-height: 480px;
        max-height: 480px;
      }

      .tamanoLogo {
        min-height: 50px;
        max-height: 50px;
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
        width: 80% !important;
        margin-left: 10%;
        height: 80%;
      }

      .tamaño {
        min-height: 295px;
        max-height: 295px;
      }

      .titulo-card {
        height: 40px;
      }

      .tamanoImagen {
        min-height: 205px;
        max-height: 205px;
      }

      .tamanoLogo {
        min-height: 40px;
        max-height: 40px;
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
        width: 85% !important;
        margin-left: 10%;
        height: 80%;
        min-height: 620px;
        max-height: 620px;
      }

      .tamaño {
        min-height: 220px;
        max-height: 220px;
      }

      .tamanoImagen {
        min-height: 110px;
        max-height: 110px;
      }

      .tamanoLogo {
        min-height: 55px;
        max-height: 55px;
      }

    }

    @media (min-width: 1350px) {
      .carousel-item {
        height: 70%;
        min-height: 500px;
        max-height: 500px;
        background: no-repeat scroll center scroll;
        background-size: cover;
      }

      .carousel-inner .carousel-item img {
        width: 60% !important;
        margin-left: 28%;
        height: 60%;
        min-height: 520px;
        max-height: 520px;
      }

      .titulo-card {
        min-height: 40px;
      }

      .tamaño {
        min-height: 270px;
        max-height: 270px;
      }

      .tamanoImagen {
        width: 100% !important;
        min-height: 170px;
        max-height: 170px;
      }

      .tamanoLogo {
        min-height: 58px;
        max-height: 58px;
      }

      .espacio {
        padding-right: 30px;
      }
    }

    @media (min-width: 1700px) {
      .carousel-item {
        min-height: 520px;
        max-height: 520px;
        background: no-repeat scroll center scroll;
        background-size: cover;
      }

      .carousel-inner .carousel-item img {
        width: 45% !important;
        margin-left: 32%;
      }

      .tamaño {
        min-height: 350px;
        max-height: 350px;
      }

      .titulo-card {
        height: 30px;
      }

      .tamanoImagen {
        width: 100% !important;
        min-height: 250px;
        max-height: 250px;
      }

      .tamanoLogo {
        min-height: 60px;
        max-height: 60px;
      }

      .espacio {
        padding-right: 30px;
      }

    }


    .carousel-item {
      height: 50%;
      min-height: 670px;
      max-height: 670px;
      background: no-repeat scroll center scroll;
      background-size: cover;
    }

    .carousel-inner .carousel-item img {
      width: 100% !important;
      /* height: 70% !important; */
      margin-left: -0%;
      /* min-height: 750px;
      max-height: 750px; */
    }

    .tamaño {
      min-height: 420px;
      max-height: 420px;
    }

    .tamanoImagen {
      min-height: 320px;
      max-height: 320px;
    }

    .tamanoLogo {
      min-height: 90px;
      max-height: 90px;
    }

    .tamanoImagen {
      -webkit-transition: all 4s ease-in-out;
      -moz-transition: all 4s ease-in-out;
      -o-transition: all 4s ease-in-out;
      transition: all 4s ease-in-out;
    }
  </style>
</head>

<body>
  <header>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <!--<div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>-->
            <div class="carousel-inner" style="height:400px">
              <div class="carousel-item active" data-bs-interval="10000">

                <?php
                require 'apis/conexion.php';
                $query = "SELECT * FROM favoritos JOIN dato_vehiculo on favoritos.favorito = dato_vehiculo.foto order by favoritos.id DESC LIMIT 1";
                //select top 1 *from tbl order by id desc;
                $datos = mysqli_query($conex, $query);
                while ($row = mysqli_fetch_array($datos)) {
                  $imagen = $row["favorito"];
                  $titulo = $row['titulo'];
                  if ($imagen) {

                    $resArray =  " 
                            <a style='text-decoration:none;' href='http://pruebas.seminuevosharo.mx/inventario/carros.php/?titulo=$titulo'>
                              <img  src='http://pruebas.seminuevosharo.mx/img_servidor/$imagen' class='d-block form-control' >
                            </a>
                            ";
                    echo ($resArray);
                  }
                }
                ?>

              </div>
              <script>
                function verAutos() {
                  location.href = "https://pruebas.seminuevosharo.mx/index.php#tema1";
                }
              </script>
              <div class="carousel-item" data-bs-interval="2000">
                <?php
                require 'apis/conexion.php';
                $query = "SELECT * FROM autoPrioridad JOIN dato_vehiculo on autoPrioridad.prioridad = dato_vehiculo.foto order by autoPrioridad.id DESC LIMIT 1";
                //select top 1 *from tbl order by id desc;
                $datos = mysqli_query($conex, $query);
                while ($row = mysqli_fetch_array($datos)) {
                  $imagen = $row["prioridad"];
                  $titulo = $row['titulo'];
                  if ($imagen) {

                    $resArray2 =  " 
                              <a style='text-decoration:none;' href='http://pruebas.seminuevosharo.mx/inventario/carros.php/?titulo=$titulo'>
                                  <img  src='http://pruebas.seminuevosharo.mx/img_servidor/$imagen' class='d-block form-control' >
                              </a>
                              ";
                    echo ($resArray2);
                  }
                }
                ?>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <?php
                require 'apis/conexion.php';
                $query = "SELECT * FROM mejorVehiculo JOIN dato_vehiculo on mejorVehiculo.mejor = dato_vehiculo.foto order by mejorVehiculo.id DESC LIMIT 1";
                //select top 1 *from tbl order by id desc;
                $datos = mysqli_query($conex, $query);
                while ($row = mysqli_fetch_array($datos)) {
                  $imagen = $row["mejor"];
                  $titulo = $row['titulo'];
                  if ($imagen) {

                    $resArray3 =  " 
                              <a style='text-decoration:none;' href='http://pruebas.seminuevosharo.mx/inventario/carros.php/?titulo=$titulo'>
                                  <img  src='http://pruebas.seminuevosharo.mx/img_servidor/$imagen' class='d-block form-control' >
                              </a>
                              ";
                    echo ($resArray3);
                  }
                }
                ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 4rem; width: 4rem;"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="height: 4rem; width: 4rem;"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <!--<div class="col-6 text-left contenedorAuto" >
                          <h5 id="tituloAuto" >Autos de calidad al mejor precio</h5>
                          <p  class="pAuto1" >Contamos con una gran variedad de autos,</p>
                          <p  class="pAuto2" >confianza y seguridad garantizada.</p>
                          <button type="button" class="btn btn-danger bAuto">Ver Autos</button>
                    </div>-->
          </div>
        </div>
      </div>
      <header>
        <div style="margin-top: 5%;">
        </div>
        <!-- slider marcas -->
        <!--<div class="row">
          <div class="col-12" style="background-color:black;height:5px;margin-top:-60px;"></div>
        </div>-->

        <?php include_once('sliderMarcas.php'); ?>


        <!-- <form action="https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=$busqueda" method="GET" class="d-block d-sm-none" style='box-shadow: 1px 1px 5px 4px;'>
    <div class="slider ">

      <div class="row justify-content-center">
        <div class=" col-3 " id="marcaAudi" style="z-index: 100">

          <div class="inner">
            <div class="image">
              <img style="width: 100%;" class="tamanoLogo" name="enviar" value="Audi" onclick="buscarMarcaAudi()" src="https://pruebas.seminuevosharo.mx/logos/562_audi.jpg" alt="Audi" />
            </div>
            <script>
              function buscarMarcaAudi() {
                let busqueda = "Audi";
                location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Audi";
              }
            </script>
          </div>

        </div>
        <div class=" col-3 " id="marcaBmw">

          <div class="inner">
            <div class="image">
              <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaBMW()" src="https://seminuevosharo.mx/wp-content/uploads/2018/09/bmw-189x131.png" alt="BMW" />
            </div>
            <script>
              function buscarMarcaBMW() {
                let busqueda = "BMW";
                location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=BMW";
              }
            </script>
          </div>

        </div>
        <div class=" col-3 " id="marcaCadillac">

          <div class="inner">
            <div class="image">
              <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaCadillac()" src="https://pruebas.seminuevosharo.mx/logos/_cadillac.jpg" alt="Cadillac" />
            </div>
            <script>
              function buscarMarcaCadillac() {
                let busqueda = "Cadillac";
                location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Cadillac";
              }
            </script>
          </div>

        </div>
        <div class="col-3 " id="marcaChevrolet">

          <div class="inner">
            <div class="image">
              <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaChevrolet()" src="https://pruebas.seminuevosharo.mx/logos/969_chevrolet.jpg" alt="Chevrolet" />
            </div>
            <script>
              function buscarMarcaChevrolet() {
                let busqueda = "Chevrolet";
                location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Chevrolet";
              }
            </script>
          </div>

        </div>
      </div>

      <div>
        <div class="row justify-content-center">
          <div class="col-3" id="marcaDodge">

            <div class="inner">
              <div class="image">
                <img style="width: 100%; margin-left:22px" class="tamanoLogo" onclick="buscarMarcaDodge()" src="https://pruebas.seminuevosharo.mx/logos/do.png" alt="Dodge" />
              </div>
              <script>
                function buscarMarcaDodge() {
                  let busqueda = "Dodge";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Dodge";
                }
              </script>
            </div>
          </div>
          <div class="col-3 text-center" id="marcaFord">

            <div class="inner">
              <div class="image">
                <img style="width: 100%;margin-left:14px" class="tamanoLogo" onclick="buscarMarcaFord()" src="https://pruebas.seminuevosharo.mx/logos/ford-189x131.png" alt="Ford" />
              </div>
              <script>
                function buscarMarcaFord() {
                  let busqueda = "Ford";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Ford";
                }
              </script>
            </div>
          </div>
          <div class="col-3 text-center" id="marcaHonda">

            <div class="inner">
              <div class="image">
                <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaHonda()" src="https://pruebas.seminuevosharo.mx/logos/hon.jpg" alt="Honda" />
              </div>
              <script>
                function buscarMarcaHonda() {
                  let busqueda = "Honda";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Honda";
                }
              </script>
            </div>
          </div>
          <div class="col-3 text-center" id="marcaHummer">

            <div class="inner">
              <div class="image">
                <img class="hummer" onclick="buscarMarcaHummer()" src="https://pruebas.seminuevosharo.mx/logos/z.jpg" alt="HUMMER" />
              </div>
              <script>
                function buscarMarcaHummer() {
                  let busqueda = "Hummer";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Hummer";
                }
              </script>
            </div>
          </div>

        </div>
      </div>

      <div>
        <div class="row justify-content-center">
          <div class="col-3" id="marcaInfiniti">

            <div class="inner">
              <div class="image">
                <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaInfiniti()" src="https://pruebas.seminuevosharo.mx/logos/infiniti-189x131.png" alt="INFINITI" />
              </div>
              <script>
                function buscarMarcaInfiniti() {
                  let busqueda = "Infiniti";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Infiniti";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-3" id="marcaJeep">

            <div class="inner">
              <div class="image">
                <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaJeep()" src="https://pruebas.seminuevosharo.mx/logos/jeep2-189x131.png" alt="Jeep" />
              </div>
              <script>
                function buscarMarcaJeep() {
                  let busqueda = "Jeep";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Jeep";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-3">

            <div class="inner">
              <div class="image">
                <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaLand()" src="https://pruebas.seminuevosharo.mx/logos/land-188x130.jpg" alt="Land Rover" />
              </div>
              <script>
                function buscarMarcaLand() {
                  let busqueda = "Land-Rover";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Land";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-3" id="marcaMazda">

            <div class="inner">
              <div class="image">
                <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaMazda()" src="https://pruebas.seminuevosharo.mx/logos/mazda-189x131.png" alt="Mazda" />
              </div>
              <script>
                function buscarMarcaMazda() {
                  let busqueda = "Mazda";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Mazda";
                }
              </script>
            </div>
            </a>
          </div>

        </div>
      </div>


      <div>
        <div class="row justify-content-center">
          <div class="col-3" id="marcaMercedesBenz">

            <div class="inner">
              <div class="image">
                <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaMercedes()" src="https://pruebas.seminuevosharo.mx/logos/mercedes-189x131.png" alt="Mercedes-Benz" />
              </div>
              <script>
                function buscarMarcaMercedes() {
                  let busqueda = "Mercedes";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Mercedes";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-3" id="marcaNissan">

            <div class="inner">
              <div class="image">
                <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaNissan()" src="https://pruebas.seminuevosharo.mx/logos/nissan-189x131.png" alt="Nissan" />
              </div>
              <script>
                function buscarMarcaNissan() {
                  let busqueda = "Nissan";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Nissan";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-3" id="marcaPorshe">

            <div class="inner">
              <div class="image">
                <img style="width: 100%;" class="tamanoLogo" onclick="buscarMarcaPorsche()" src="https://seminuevosharo.mx/wp-content/uploads/2018/09/porsche-189x131.png" alt="Porsche" />
              </div>
              <script>
                function buscarMarcaPorsche() {
                  let busqueda = "Porsche";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Porsche";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-3" id="marcaRam">

            <div class="inner">
              <div class="image">
                <img style="width: 90px;" class="tamanoLogo" onclick="buscarMarcaRam()" src="https://pruebas.seminuevosharo.mx/logos/ram-189x131.png" alt="Ram" />
              </div>
              <script>
                function buscarMarcaRam() {
                  let busqueda = "Ram";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Ram";
                }
              </script>
            </div>
            </a>
          </div>

        </div>
      </div>

      <div>
        <div class="row justify-content-center">
          <div class="col-3" id="marcaToyota">

            <div class="inner">
              <div class="image">
                <img style="width: 90px;" class="tamanoLogo" onclick="buscarMarcaToyota()" src="https://pruebas.seminuevosharo.mx/logos/toyota-189x131.png" alt="Toyota" />
              </div>
              <script>
                function buscarMarcaToyota() {
                  let busqueda = "Toyota";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Toyota";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-3" id="marcaVolkswagen">

            <div class="inner">
              <div class="image">
                <img style="width: 90px;" class="tamanoLogo" onclick="buscarMarcaVolkswagen()" src="https://pruebas.seminuevosharo.mx/logos/vw-189x131.png" alt="Volkswagen" />
              </div>
              <script>
                function buscarMarcaWolkswagen() {
                  let busqueda = "Wolkswagen";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=Wolkswagen";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-2" id="marcaMcLaren">

            <div class="inner">
              <div class="image">
                <img style="width: 90px;background-color:white;" class="tamanoLogo" onclick="buscarMarcaMcLaren()" src="https://pruebas.seminuevosharo.mx/fotos/McLaren-Logo.png" alt="McLaren" />
              </div>
              <script>
                function buscarMarcaMcLaren() {
                  let busqueda = "mcLaren";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=mcLaren";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-2" id="marcaSuzuki">

            <div class="inner">
              <div class="image">
                <img style="height: 60px; width: 100%;background-color:white;" class="tamanoLogo" onclick="buscarMarcaSuzuki()" src="https://pruebas.seminuevosharo.mx/logos/suzuki.png" alt="Suzuki" />
              </div>
              <script>
                function buscarMarcaSuzuki() {
                  let busqueda = "suzuki";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=suzuki";
                }
              </script>
            </div>
            </a>
          </div>
          <div class="col-2" id="marcaTesla">

            <div class="inner">
              <div class="image">
                <img style="width: 90px;background-color:white;" class="tamanoLogo" onclick="buscarMarcaTesla()" src="https://pruebas.seminuevosharo.mx/fotos/tesla-logo.png" alt="Tesla" />
              </div>
              <script>
                function buscarMarcaTesla() {
                  let busqueda = "tesla";
                  location.href = "https://pruebas.seminuevosharo.mx/buscarMarca.php?enviar=tesla";
                }
              </script>
            </div>
            </a>
          </div>

        </div>
      </div>

    </div>
  </form> -->



        <script>
          $('.slider').bxSlider({
            autoControls: true,
            auto: false,
            pager: false,
            mode: 'horizontal',
            speed: 1000
          });
        </script>

        <form action="buscar.php?enviar=$busqueda" method="GET">
          <div class="row" style="margin-top: 20px;">
            <div class="col-1 col-md-4"></div>
            <div class="col-10 col-md-4">
              <div class="input-group rounded">
                <input type="text" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" name="busqueda">
              </div>
            </div>
            <div class="col-1 col-md-4"></div>
          </div>

          <div class="row" style="margin-top: 20px;">
            <div class="col-1 col-md-4"></div>
            <div class="col-10 col-md-4 contenedor-range">
              <div class="input-contenedor">
                <div class="wrapper">
                  <div class="price-input">
                    <div class="field">
                      <span>Min</span>
                      <?php
                      $queryPrecioM = "SELECT MIN(precio) AS precio_minimo FROM dato_vehiculo";
                      $datosPrecioM = mysqli_query($conex, $queryPrecioM);

                      while ($rowPrecioM = mysqli_fetch_array($datosPrecioM)) {
                        $precio_minimo = $rowPrecioM["precio_minimo"];

                      ?>
                        <input type="number" class="input-min" name='precio_min' value=<?php echo $precio_minimo ?>>
                      <?php
                      }
                      ?>
                    </div>
                    <div class="separator">-</div>
                    <div class="field">
                      <span>Max</span>
                      <?php
                      $queryPrecio = "SELECT MAX(precio) AS precio_maximo FROM dato_vehiculo";
                      $datosPrecio = mysqli_query($conex, $queryPrecio);

                      while ($rowPrecio = mysqli_fetch_array($datosPrecio)) {
                        $precio_maximo = $rowPrecio["precio_maximo"];

                      ?>
                        <input type="number" class="input-max" name='precio_max' value=<?php echo $precio_maximo ?>>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                  <div class="slider-range">
                    <div class="progress"></div>
                  </div>
                  <div class="range-input">
                    <input type="range" class="range-min" min="0" max="1000000" value="250000">
                    <input type="range" class="range-max" min="0" max="1000000" value="750000">


                    <!--<input type="range" class="range-min" min=<?php echo $precio_minimo ?> max=<?php echo $precio_maximo ?> value=<?php echo $precio_minimo ?>>
                                <input type="range" class="range-max" min=<?php echo $precio_minimo ?> max=<?php echo $precio_maximo ?> value=<?php echo $precio_maximo ?>>-->
                  </div>
                </div>
              </div>

            </div>
            <script src="script.js"></script>
          </div>
          <div class="col-1 col-md-4">
          </div>
    </div>

    <!--  <div class="row" style="margin-top: 10px;">
                      <div class="col-4"></div>
                      <div class="col-2 text-center">
                      <?php
                      $queryPrecioM = "SELECT MIN(precio) AS precio_minimo FROM dato_vehiculo";
                      $datosPrecioM = mysqli_query($conex, $queryPrecioM);

                      while ($rowPrecioM = mysqli_fetch_array($datosPrecioM)) {
                        $precio_minimo = $rowPrecioM["precio_minimo"];

                      ?>
                          <input type="number" class="form-control rounded" name='precio_min' value=<?php echo $precio_minimo ?>>
                          <?php
                        }
                          ?>
                      </div>
                      <div class="col-2 text-center">
                      <?php
                      $queryPrecio = "SELECT MAX(precio) AS precio_maximo FROM dato_vehiculo";
                      $datosPrecio = mysqli_query($conex, $queryPrecio);

                      while ($rowPrecio = mysqli_fetch_array($datosPrecio)) {
                        $precio_maximo = $rowPrecio["precio_maximo"];

                      ?>
                          <input type="number" class="form-control rounded" name='precio_max' value=<?php echo $precio_maximo ?>>
                          <?php
                        }
                          ?>
                      </div>
                      <div class="col-4"></div>
              </div>-->
    <div class="row" style="margin-top: 10px;">
      <div class="col-4"></div>
      <div class="col-4">
        <input style="background-color: black;color:white;" class="form-control" type="submit" name="enviar" value="Buscar">
      </div>
      <div class="col-4"></div>
    </div>

    </form>


    <a name="tema1">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-11">
            <div class='row pb-5 mb-4 justify-content-center' id='bloque1'>
              <!--<a href='https://seminuevosharo.mx/Listados/$outputString' > -->
              <?php
              $marcas = $_GET['marcas'];
              if (isset($marcas)) {

                $query = 'SELECT * FROM dato_vehiculo WHERE marca = "' . $marcas . '"';
              } else {
                $query = "SELECT * FROM dato_vehiculo WHERE congelado != 'si' limit $iniciar, $articulos_x_pagina";
              }
              //$resultado = $conex->query($query);
              //$row = $resultado->fetch_assoc();

              $datos = mysqli_query($conex, $query);
              //$datos = $pdo->prepare($query);
              //$datos->bindParam(':inicar', $iniciar, PDO::PARAM_INT);
              //$datos->bindParam('narticulos', $articulos_x_pagina, PDO::PARAM_INT);
              //$datos->execute();

              //$resultado_articulos = $sentencia_articulos->fetchAll();
              $arrayDatos = array();

              for ($i = 0; $i <= 7; $i++) {
                //while($row = $resultado->fetch_assoc()){
                //$array[] = $row;
                while ($row = mysqli_fetch_array($datos)) {
                  //$arrayDatos[] = $row;
                  $titulo = $row["titulo"];
                  $imagen = $row["foto"];
                  $foto1 = $row["listaFoto1"];
                  $foto2 = $row["listaFoto2"];
                  $foto15 = $row["listaFoto15"];
                  $precio = number_format($row["precio"], 0, '.', ',');
                  $tipo = $row["tipo"];
                  $combustible = $row["combustible"];
                  $kilometraje = $row["kilometraje"];
                  $transmision = $row["transmision"];
                  $cifradoImagen = base64_encode($imagen);
                  if ($imagen) {

                    $resArray =  " 
                   <div class='col-lg-3 col-md-6 mb-4 mb-lg-0' style='margin-top: 5%;text-align:center;'>
                          <div class='card  text-white bg-dark border-0 rounded tamaño' >
                                <a style='text-decoration:none;' href='http://pruebas.seminuevosharo.mx/inventario/carros.php/?titulo=$titulo'>
                                  <div class='card-body p-0 contenedorImage' style='display: inline-block;position:relative;' >   
                                    <img class='w-100 card-img-top tamanoImagen ' id='imagen1' src='http://pruebas.seminuevosharo.mx/img_servidor/$imagen' onmouseover=src='http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/$foto1' onmouseout=src='http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/$foto2'>                                        
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
    </a>

    <div class="row mt-4 mb-4 justify-content-center">

      <div class="col-auto">

        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
              <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] - 1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Anterior</span>
              </a>
            </li>
            <?php
            for ($i = 0; $i < $paginas; $i++) :
            ?>
              <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
                <a class="page-link" href="index.php?pagina=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a>
              </li>
            <?php endfor ?>
            <li class="page-item <?php echo $_GET['pagina'] > $paginas ? 'disabled' : '' ?>">
              <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] + 1 ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Siguiente</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

    </div>
    <div class="wpb_text_column wpb_content_element ">
      <div class="wpb_wrapper">
        <h3 style="text-align: center;">Haro Seminuevos<br />
          Av. Cvln. División del Nte. 1264, Jardines del Country<br />
          Guadalajara, Jal.</h3>
        <h3 style="text-align: center;" data-pm-slice="1 1 &#091;&#093;"><strong>333 636 8433 / 33 195 52634</strong></h3>
      </div>
    </div>
    <div class="wpb_gmaps_widget wpb_content_element">
      <div class="wpb_wrapper">
        <div class="wpb_map_wraper">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.2586389527037!2d-103.37018228507286!3d20.69971938617743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428afb59ea65311%3A0x1963cbfa3606058a!2sHaro%20Seminuevos!5e0!3m2!1ses!2smx!4v1596134732826!5m2!1ses!2smx" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
          </iframe>
        </div>
      </div>
    </div>
</body>
<link href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css' rel='stylesheet' type='text/css'>
<script src="app.js"></script>
<script src="script.js"></script>
<script src="js/sliderMarcas.js"></script>

</html>