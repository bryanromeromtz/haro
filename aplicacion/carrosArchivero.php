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
        <script src="https://kit.fontawesome.com/5764f4dea0.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <title>base de datos</title>
    </head>
    <body class="mt-4">
        <div class="container">
            <div class="row mb-4">
                <div class="col-3 text-left">
                    <button type="button" class="btn btn-dark form-control" onclick="regresar()" >Regresar</button>
                </div>
                <div class="col-3 ">                   
                </div>
                <div class="col-3 ">                  
                </div>
                <div class="col-3 text-right">
                    <button class="btn btn-dark form-control" type="button" onclick="location.href='https://pruebas.seminuevosharo.mx/cerrarSesion.php'">Cerrar Sesión</button>
                </div>
            </div>
        </div>
        <!--<button type="button" class="btn btn-success" onclick="insertarVehiculo()" style ="background-color:#58D800;color:white;width:10%;height:40px;margin-bottom:5px;border:none;">nuevo vehiculo</button>-->
        <script>
            function insertarVehiculo(){
                location.href = "aplicacion/insertar.php";
            }
            function regresar(){
                location.href = "../mostrar.php";
            }
        </script>
        
        
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Vendedor</th>
                    <th>Titulo</th>
                    <th>Marca</th>
                    <th>Imagen</th>
                    <th>Tipo</th>
                    <th>Color</th>
                    <th>Transmision</th>
                    <th>Año</th>
                    <th>Precio</th>
                    <th>Teléfono</th>
                    <th>Cilindros</th>
                    <th>Kilometraje</th>
                    <th>Combustible</th>
                    <th>Lista foto 1</th>
                    <th>Lista foto 2</th>
                    <th>Lista foto 3</th>
                    <th>Lista foto 4</th>
                    <th>Lista foto 5</th>
                    <th>Lista foto 6</th>
                    <th>Lista foto 7</th>
                    <th>Lista foto 8</th>
                    <th>Lista foto 9</th>
                    <th>Lista foto 10</th>
                    <th>Lista foto 11</th>
                    <th>Lista foto 12</th>
                    <th>Lista foto 13</th>
                    <th>Lista foto 14</th>
                    <th>Lista foto 15</th>
                    <th colspan="3">Operaciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include("../apis/conexion.php");

                    $query = "SELECT * FROM archivero";
                    $resultado = $conex->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>   
            <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['vendedor'] ?></td>
                    <td><?php echo $row['titulo'] ?></td>
                    <td><?php echo $row['marca'] ?></td>
                    <td><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/<?php echo $row['foto']?>"></td>
                    <td><?php echo $row['tipo'] ?></td>
                    <td><?php echo $row['color'] ?></td>
                    <td><?php echo $row['transmision'] ?></td>
                    <td><?php echo $row['ano'] ?></td>
                    <td><?php echo $row['precio'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['cilindros'] ?></td>
                    <td><?php echo $row['kilometraje'] ?></td>
                    <td><?php echo $row['combustible'] ?></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto1'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto2'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto3'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto4'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto5'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto6'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto7'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto8'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto9'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto10'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto11'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto12'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto13'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto14'] ?>"></td>
                    <td><img height="70px;" src="../img_servidor/lista_fotos/<?php echo $row['listaFoto15'] ?>"></td>
                    <th><a href="edit.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-marker" style="font-size: 150%;"></i></th>
                    <th><a href="delete.php?id=<?php echo $row['id']?>" ><i class="far fa-trash-alt" style="color: red;font-size: 150%;"></i></th>
                    <th><a href="insertarCarroArchivado.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-upload" style="color: #blue;font-size: 150%;"></i></th>
                </tr> 
                <?php
                    } 
                
                ?>
            </tbody>
        </table>
    </body>
</html>