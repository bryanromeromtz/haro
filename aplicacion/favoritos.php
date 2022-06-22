<?php
    session_Start();

    require '../apis/conexion.php';

    if(!isset($_SESSION['usuario'])){

?>
    <script>
        location.href = "https://pruebas.seminuevosharo.mx/login.php";
    </script>

<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<section class="vh-100" style="background-image: url('http://pruebas.seminuevosharo.mx/fotos/MAZDA-3.jpg');background-size: cover;">
            <div class="container" style="position: relative;z-index: 100; width: 100%;">
				
                <div class="row" style="width: 100%;">
                  <div class="col-3 text-left">
                    <img src="../fotos/haro-logo.png" style=" width: 85%;">
                  </div>
                    
                    <div class="col-3 text-center" style="margin-top: 2%;" >
                        <a href="https://pruebas.seminuevosharo.mx/mostrar.php" style="text-decoration: none;font-size: 25px;color:white">Inicio</a>
                    </div>
                    <div class="col-3 text-center" style="margin-top: 2%;">
                      <a href="https://pruebas.seminuevosharo.mx/mostrar.php" style="text-decoration: none;font-size: 25px;color:white">Vehículos</a>
                    </div>
                    <div class="col-3 text-center" style="margin-top: 2%;">
                    </div>
                      
                </div>
          </div>
        <div class="container-fluid" >
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 text-center" style="margin-top:1%">
                    <form action="proceso_insertar_favoritos.php" method="POST" enctype="multipart/form-data" >
                                
                                    <h2><strong>Favorito</strong></h2>
                                    <input type="file" class="form-control" name="favorito" placeholder="Favorito 1">

                                    <button class="btn btn-primary form-control" type="submit" value="aceptar">Aceptar</button>
                    </form>
                </div>
                <div class="col-12 col-md-4 mt-2 ">
                <?php
            require '../apis/conexion.php';
            $query = "SELECT * FROM favoritos order by id DESC LIMIT 1";
            //select top 1 *from tbl order by id desc;
            $datos = mysqli_query($conex, $query);
              while($row = mysqli_fetch_array($datos)){
                 $imagen = $row["favorito"];
                 if($imagen){
            
                 $resArray =  " 
                 <div class='col-12 col-md-4 mt-4 ' style='margin-top: 5%;text-align:center;'>
                        <div class='card  text-white bg-dark border-0 rounded tamaño' >
                                <div class='card-body p-0' style='display: inline-block;position:relative;' >   
                                  <img class='w-100 card-img-top tamanoImagen' src='http://pruebas.seminuevosharo.mx/img_servidor/$imagen'>                           
                                </div> 
                        </div>      
                  </div>";
                    echo ($resArray);
                    
               }
             }
            ?>

                </div>
            </div>
        </div>
        <div class="container-fluid" >
            <div class="row justify-content-center">

                <div class="col-12 col-md-4 text-center" style="margin-top:1%">
                        <form action="proceso_insertar_aPrioridad.php" method="POST" enctype="multipart/form-data">
                                    
                                        <h2 style="text-align:center;"><strong>Vehículo de Prioridad</strong></h2>
                                        <input type="file" class="form-control" name="prioridad" placeholder="Prioridad a Vender">

                                        <button class="btn btn-primary form-control" type="submit" value="aceptar">Aceptar</button>
                        </form>
                </div>
                <div class="col-12 col-md-4 mt-2 ">
                            <?php
                        require '../apis/conexion.php';
                        $query = "SELECT * FROM autoPrioridad order by id DESC LIMIT 1";
                        //select top 1 *from tbl order by id desc;
                        $datos = mysqli_query($conex, $query);
                        while($row = mysqli_fetch_array($datos)){
                            $imagen = $row["prioridad"];
                            if($imagen){
                        
                            $resArray2 =  " 
                            <div class='col-12 col-md-4 mt-4 ' style='margin-top: 5%;text-align:center;'>
                                    <div class='card  text-white bg-dark border-0 rounded tamaño' >
                                            <div class='card-body p-0' style='display: inline-block;position:relative;' >   
                                            <img class='w-100 card-img-top tamanoImagen' src='http://pruebas.seminuevosharo.mx/img_servidor/$imagen'>                           
                                            </div> 
                                    </div>      
                            </div>";
                                echo ($resArray2);
                                
                        }
                        }
                        ?>
                </div>
            </div>
        </div>
        <div class="container-fluid" >
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 text-center" style="margin-top:1%">
                        <form action="proceso_insertar_mejor.php" method="POST" enctype="multipart/form-data">
                                    
                                        <h2><strong>Mejor Vehículo</strong></h2>
                                        <input type="file" class="form-control" name="mejor" placeholder="Mejor Vehículo">

                                        <button class="btn btn-primary form-control" type="submit" value="aceptar">Aceptar</button>
                        </form>
                </div>
                <div class="col-12 col-md-4 mt-2 ">
                        <?php
                        require '../apis/conexion.php';
                        $query = "SELECT * FROM mejorVehiculo order by id DESC LIMIT 1";
                        //select top 1 *from tbl order by id desc;
                        $datos = mysqli_query($conex, $query);
                        while($row = mysqli_fetch_array($datos)){
                            $imagen = $row["mejor"];
                            if($imagen){
                        
                            $resArray3 =  " 
                            <div class='col-12 col-md-4 mt-4 ' style='margin-top: 5%;text-align:center;'>
                                    <div class='card  text-white bg-dark border-0 rounded tamaño' >
                                            <div class='card-body p-0' style='display: inline-block;position:relative;' >   
                                            <img class='w-100 card-img-top tamanoImagen' src='http://pruebas.seminuevosharo.mx/img_servidor/$imagen'>                           
                                            </div> 
                                    </div>      
                            </div>";
                                echo ($resArray3);
                                
                        }
                        }
                        ?>
                </div>
            </div>
        </div>
</section>
</body>
</html>