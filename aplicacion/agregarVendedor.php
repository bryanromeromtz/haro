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
<section class="vh-100" style="background-image: url('http://pruebas.seminuevosharo.mx/fotos/chiron.jpg');background-size: cover;">
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
    <form action="proceso_insertar_vendedor.php" method="POST" enctype="multipart/form-data">
        <div class="container" style="margin-top: 5%;">
            <div class="row justify-content-center">
                
                <div class="col-12 col-md-4 mt-2">
                    <input type="text" class="form-control" required name="vendedorAutos" placeholder="vendedor" value="">
                </div>
                
                <div class="col-12 col-md-4 mt-2">
                    <input type="text" class="form-control" required name="telefonoVendedor" placeholder="teléfono" value="">
                </div>
                
                <div class="col-12 col-md-8 mt-2">
                    <button class="btn btn-primary form-control" type="submit" value="aceptar">Aceptar</button>
                </div>
            </div>
        </div>
    </form>
</section>
</body>
</html>