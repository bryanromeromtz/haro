<?php
    session_Start();

    require 'apis/conexion.php';

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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <title>base de datos</title>
    </head>
    <body class="mt-4">
        <div class="container-fluid ">
            <div class="row mb-4 justify-content-center">
                <div class="col-2 text-left">
                    <button type="button" class="btn btn-dark form-control" onclick="insertarVehiculo()" >nuevo vehículo</button>
                </div>
                
                <div class="col-2 text-right">
                    <button type="button" class="btn btn-dark form-control" onclick="insertarVehiculoArchivo()" >vehículos Archivados</button>
                </div>

                <div class="col-2 text-right">
                    <button type="button" class="btn btn-dark form-control" onclick="insertarVendedor()" >agregar vendedor</button>
                </div>

                <div class="col-2 text-right">
                    <button type="button" class="btn btn-dark form-control" onclick="insertarFavoritos()" >Favoritos</button>
                </div>
                
                <div class="col-2 ">
                    <button class="btn btn-dark form-control" type="button" onclick="location.href='https://pruebas.seminuevosharo.mx/cerrarSesion.php'">Cerrar Sesión</button>                   
                </div>
                
            </div>
        </div>
        <!--<button type="button" class="btn btn-success" onclick="insertarVehiculo()" style ="background-color:#58D800;color:white;width:10%;height:40px;margin-bottom:5px;border:none;">nuevo vehiculo</button>-->
        <script>
            function insertarVehiculo(){
                location.href = "aplicacion/insertar.php";
            }
            function insertarVehiculoArchivo(){
                location.href = "aplicacion/carrosArchivero.php";
            }
            function insertarVendedor(){
                location.href = "aplicacion/agregarVendedor.php";
            }
            function insertarFavoritos(){
                location.href = "aplicacion/favoritos.php";
            }

        </script>
        
        <table class="table table-striped ">
            <thead style="background-color:#585858;">
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
                    <th colspan="4">Operaciones</th>
                </tr>
            </thead>
            <tbody id="bloque1">
                    <?php
                        include("apis/conexion.php");
                            
                            $query = "SELECT * FROM dato_vehiculo limit 0,7";
                            $resultado = $conex->query($query);
                            while($row = $resultado->fetch_assoc()){
                                $congelado = $row['congelado'];
                        ?>   
                    <tr>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#585858'?> style="background-color:<?php echo $negro?>"><?php echo $row['id'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['vendedor'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['titulo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['marca'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/<?php echo $row['foto']?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['tipo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['color'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['transmision'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['ano'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['precio'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['telefono'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['cilindros'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['kilometraje'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['combustible'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto1'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/lista_fotos/<?php echo $row['listaFoto2'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto3'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto4'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto5'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto6'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto7'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto8'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto9'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto10'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto11'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto12'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto13'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto14'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto15'] ?>"></td>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="edit.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-marker" style="font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="delete.php?id=<?php echo $row['id']?>" ><i class="far fa-trash-alt" style="color: red;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="congelado.php?id=<?php echo $row['id']?>&congelado=<?php echo $row['congelado']?>" ><i class="fa-solid fa-igloo" style="color: #9dcfdd;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="archivero.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-folder" style="color: #6A4800;font-size: 150%;"></i></th>
                    </tr> 
                    <?php
                        }
                    
                    ?>
                
            </tbody>
            <tbody id="bloque2">
                    <?php
                        include("apis/conexion.php");

                            $query = "SELECT * FROM dato_vehiculo limit 7,14";
                            $resultado = $conex->query($query);
                            while($row = $resultado->fetch_assoc()){
                        ?>   
                    <tr>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#585858'?> style="background-color:<?php echo $negro?>"><?php echo $row['id'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['vendedor'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['titulo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['marca'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/<?php echo $row['foto']?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['tipo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['color'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['transmision'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['ano'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['precio'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['telefono'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['cilindros'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['kilometraje'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['combustible'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto1'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/lista_fotos/<?php echo $row['listaFoto2'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto3'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto4'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto5'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto6'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto7'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto8'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto9'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto10'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto11'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto12'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto13'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto14'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto15'] ?>"></td>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="edit.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-marker" style="font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="delete.php?id=<?php echo $row['id']?>" ><i class="far fa-trash-alt" style="color: red;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="congelado.php?id=<?php echo $row['id']?>&congelado=<?php echo $row['congelado']?>" ><i class="fa-solid fa-igloo" style="color: #9dcfdd;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="archivero.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-folder" style="color: #6A4800;font-size: 150%;"></i></th>
                    </tr> 
                    <?php
                        }
                    
                    ?>
                
            </tbody>
            <tbody id="bloque3">
                    <?php
                        include("apis/conexion.php");

                            $query = "SELECT * FROM dato_vehiculo limit 14,21";
                            $resultado = $conex->query($query);
                            while($row = $resultado->fetch_assoc()){
                        ?>   
                    <tr>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#585858'?> style="background-color:<?php echo $negro?>"><?php echo $row['id'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['vendedor'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['titulo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['marca'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/<?php echo $row['foto']?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['tipo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['color'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['transmision'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['ano'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['precio'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['telefono'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['cilindros'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['kilometraje'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['combustible'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto1'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/lista_fotos/<?php echo $row['listaFoto2'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto3'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto4'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto5'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto6'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto7'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto8'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto9'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto10'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto11'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto12'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto13'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto14'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto15'] ?>"></td>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="edit.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-marker" style="font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="delete.php?id=<?php echo $row['id']?>" ><i class="far fa-trash-alt" style="color: red;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="congelado.php?id=<?php echo $row['id']?>&congelado=<?php echo $row['congelado']?>" ><i class="fa-solid fa-igloo" style="color: #9dcfdd;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="archivero.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-folder" style="color: #6A4800;font-size: 150%;"></i></th>
                    </tr> 
                    <?php
                        }
                    
                    ?>
                
            </tbody>
            <tbody id="bloque4">
                    <?php
                        include("apis/conexion.php");

                            $query = "SELECT * FROM dato_vehiculo limit 21,28";
                            $resultado = $conex->query($query);
                            while($row = $resultado->fetch_assoc()){
                        ?>   
                    <tr>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#585858'?> style="background-color:<?php echo $negro?>"><?php echo $row['id'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['vendedor'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['titulo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['marca'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/<?php echo $row['foto']?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['tipo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['color'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['transmision'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['ano'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['precio'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['telefono'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['cilindros'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['kilometraje'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['combustible'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto1'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/lista_fotos/<?php echo $row['listaFoto2'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto3'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto4'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto5'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto6'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto7'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto8'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto9'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto10'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto11'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto12'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto13'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto14'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto15'] ?>"></td>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="edit.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-marker" style="font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="delete.php?id=<?php echo $row['id']?>" ><i class="far fa-trash-alt" style="color: red;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="congelado.php?id=<?php echo $row['id']?>&congelado=<?php echo $row['congelado']?>" ><i class="fa-solid fa-igloo" style="color: #9dcfdd;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="archivero.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-folder" style="color: #6A4800;font-size: 150%;"></i></th>
                    </tr> 
                    <?php
                        }
                    
                    ?>
                
            </tbody>
            <tbody id="bloque5">
                    <?php
                        include("apis/conexion.php");

                            $query = "SELECT * FROM dato_vehiculo limit 28,35";
                            $resultado = $conex->query($query);
                            while($row = $resultado->fetch_assoc()){
                        ?>   
                    <tr>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#585858'?> style="background-color:<?php echo $negro?>"><?php echo $row['id'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['vendedor'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['titulo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['marca'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/<?php echo $row['foto']?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['tipo'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['color'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['transmision'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['ano'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['precio'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['telefono'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['cilindros'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><?php echo $row['kilometraje'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><?php echo $row['combustible'] ?></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto1'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="img_servidor/lista_fotos/<?php echo $row['listaFoto2'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto3'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto4'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto5'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto6'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto7'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto8'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto9'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto10'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto11'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto12'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto13'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto14'] ?>"></td>
                        <td <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><img height="70px;" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto15'] ?>"></td>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="edit.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-marker" style="font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="delete.php?id=<?php echo $row['id']?>" ><i class="far fa-trash-alt" style="color: red;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#7F7F7F'?> style="background-color:<?php echo $negro?>"><a href="congelado.php?id=<?php echo $row['id']?>&congelado=<?php echo $row['congelado']?>" ><i class="fa-solid fa-igloo" style="color: #9dcfdd;font-size: 150%;"></i></th>
                        <th <?php $congelado == 'si' ?  $negro ='#70DCFF':  $negro ='#696A69'?> style="background-color:<?php echo $negro?>"><a href="archivero.php?id=<?php echo $row['id']?>" ><i class="fa-solid fa-folder" style="color: #6A4800;font-size: 150%;"></i></th>
                    </tr> 
                    <?php
                        }
                    
                    ?>
                
            </tbody>
        </table>

                <div class="row mt-4 mb-4">
                    <div class="col-2"></div>
                    <div class="col-2">
                    </div>
                        <div class="col-4" style="text-align:center;">
                            <button class="btn btn-dark" onclick="muestra()">1</button>
                            <button class="btn btn-dark" onclick="muestra2()">2</button>
                            <button class="btn btn-dark" onclick="muestra3()">3</button>
                            <button class="btn btn-dark" onclick="muestra4()">4</button>
                            <button class="btn btn-dark" onclick="muestra5()">5</button>
                        </div>
                    <div class="col-2"></div>
                    <div class="col-2">
                    </div>
                </div>
    </body>

    <script src="app.js"></script>
</html>