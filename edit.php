<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
    <title></title>
</head>
<body>
    
<?php

    include("apis/conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM dato_vehiculo where dato_vehiculo.id = $id";
        $result = mysqli_query($conex,$query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $titulo = $row['titulo'];
            //echo $titulo ;
        }
    }

?>
    <form action="aplicacion/proceso_edit.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data">
        <div class="container" style="margin-top: 5%;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 ">
                    <input type="text" class="form-control" required name="vendedor" placeholder="vendedor" value="<?php echo $row ['vendedor']?>">
                </div>
                <div class="col-12 col-md-6 ">
                    <h2>Lista de fotos del vehiculo</h2>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <input type="file" class="form-control" required name="foto" value="foto"><img height="70px;" src="img_servidor/<?php echo $row['foto']?>">
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <input type="file" class="form-control" required name="listaFotos[]" multiple>
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <select id="cars" class="form-control" name="marca">
                        <option value="<?php echo $row ['marca']?>"><?php echo $row ['marca']?></option>
                        <option value="AUDI">AUDI</option>
                        <option value="BMW">BMW</option>
                        <option value="CHEVROLET">CHEVROLET</option>
                        <option value="DODGE">DODGE</option>
                        <option value="FORD">FORD</option>
                        <option value="GMC">GMC</option>
                        <option value="HONDA">HONDA</option>
                        <option value="HUMMER">HUMMER</option>
                        <option value="INFINITI">INFINITI</option>
                        <option value="JEEP">JEEP</option>
                        <option value="MAZDA">MAZDA</option>
                        <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                        <option value="MINI">MINI</option>
                        <option value="NISSAN">NISSAN</option>
                        <option value="PORSCHE">PORSCHE</option>
                        <option value="RAM">RAM</option>
                        <option value="TOYOTA">TOYOTA</option>
                        <option value="VOLKWAGEN">VOLKWAGEN</option>
                        <option value="MCLAREN">MCLAREN</option>
                        <option value="SUZUKI">SUZUKI</option>
                        <option value="TESLA">TESLA</option>
                    </select>
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <select id="tipos" class="form-control" name="tipo">
                    <option value="<?php echo $row ['tipo']?>"><?php echo $row ['tipo']?></option>
                        <option value="CAMIONETA-SUB">CAMIONETA SUB</option>
                        <option value="SEDAN">SEDAN</option>
                        <option value="COUPE">COUPE</option>
                        <option value="HASHBACK">HASHBACK</option>
                        <option value="PICK-UP">PICK UP</option>
                        <option value="TODO-TERRENO">TODO TERRENO</option>
                    </select>
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="color" placeholder="color" value="<?php echo $row ['color']?>">
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="transmision" placeholder="transmisión" value="<?php echo $row ['transmision']?>">
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="number" class="form-control" required name="ano" placeholder="año" value="<?php echo $row ['ano']?>">
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="precio" placeholder="precio" value="<?php echo $row ['precio']?>">
                </div>
                
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="number" class="form-control" required name="telefono" placeholder="teléfono" value="<?php echo $row ['telefono']?>">
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="number" class="form-control" required name="cilindros" placeholder="cilindros" value="<?php echo $row ['cilindros']?>">
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="titulo" placeholder="titulo completo del vehiculo" value="<?php echo $row ['titulo']?>">
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="kilometraje" placeholder="kilometraje" value="<?php echo $row ['kilometraje']?>">
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <select id="interiores" class="form-control" name="interior">
                        <option value="<?php echo $row ['kilometraje']?>"><?php echo $row ['kilometraje']?></option>
                        <option value="PIEL">PIEL</option>
                        <option value="TELA">TELA</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="combustible" placeholder="combustible" value="<?php echo $row ['combustible']?>">
                </div>
                <div class="col-12 col-md-12 mt-2">
                    <button class="btn btn-primary form-control" type="submit" value="aceptar">Aceptar</button>
                </div>
            </div>
        </div>
    </form>
    </body>
</html>