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
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<section class="vh-100" style="background-image: url('http://pruebas.seminuevosharo.mx/fotos/bugatti_chiron_prototype_76.jpeg');background-size: cover;">

            <div class="container" style="position: relative;z-index: 100; width: 100%;">
				
                <div class="row" style="width: 100%;">
                  <div class="col-3 text-left">
                    <img src="../fotos/haro-logo.png" style=" width: 85%;">
                  </div>
                    
                    <div class="col-3 text-center" style="margin-top: 2%;" >
                        <a href="http://pruebas.seminuevosharo.mx/mostrar.php" style="text-decoration: none;font-size: 25px;color:white">Inicio</a>
                    </div>
                    <div class="col-3 text-center" style="margin-top: 2%;">
                      <a href="http://pruebas.seminuevosharo.mx/mostrar.php" style="text-decoration: none;font-size: 25px;color:white">Vehículos</a>
                    </div>
                    <div class="col-3 text-center" style="margin-top: 2%;">
                    </div>
                      
                </div>
          </div>

          <script>
              function buscar(){
                  var opcion = document.getElementById('vendedor').value;
                window.location.href = 'https://pruebas.seminuevosharo.mx/aplicacion/insertar.php?opcion='+opcion;
               //alert(opcion);  
              }
              
          </script>
    <form action="proceso_insertar.php" method="POST" enctype="multipart/form-data">
        <div class="container" style="margin-top: 5%;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 ">
                    <!--<input type="text" class="form-control" required name="vendedor" placeholder="vendedor" value="">-->
                    <select id="vendedor" class="form-control" name="vendedor" onchange="return buscar()">
                    <?php $vendedorAutosSelected =$_GET['opcion']; ?>
                        <option disabled selected>Selecciona un Vendedor</option>
                        <option  value=<?php echo $vendedorAutosSelected?> selected="selected" ><?php echo $vendedorAutosSelected?></option>
                    <?php
                        include("../apis/conexion.php");
                         
                        $query = "SELECT id,vendedorAutos,telefonoVendedor FROM vendedores";
                        $resultado = $conex->query($query);
                        
                            while($row = $resultado->fetch_assoc()){
                                $vendedorAutos = $row['vendedorAutos'];
                                $telefonoVendedor = $row['telefonoVendedor'];
                                $id = $row['id'];
                                
                    ?>
                        <option value=<?php echo $vendedorAutos?>><?php echo $vendedorAutos?></option>
                        
                    <?php
                    
                            }
                    ?>
                    </select>
                </div>
                
                <div class="col-12 col-md-6 ">
                    <h2 style="color:white">Lista de fotos del vehiculo</h2>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <input type="file" class="form-control" required name="foto">
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <input type="file" class="form-control" required name="listaFotos[]" multiple>
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <select id="lista1" class="form-control" name="marca">
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

                <div id="select2lista" class="col-12 col-md-6 mt-2">
                </div>
                
               <!--<div class="col-12 col-md-6 mt-2">
                    <select id="tipos" class="form-control" name="tipo">
                        <option value="CAMIONETA-SUB">CAMIONETA SUB</option>
                        <option value="SEDAN">SEDAN</option>
                        <option value="DEPORTIVO">DEPORTIVO</option>
                        <option value="COUPE">COUPE</option>
                        <option value="HASHBACK">HASHBACK</option>
                        <option value="PICK-UP">PICK UP</option>
                        <option value="TODO-TERRENO">TODO TERRENO</option>
                    </select>
                </div>-->
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="color" placeholder="color" value="">
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <select id="transmision" class="form-control" required name="transmision">
                        <option value="AUTOMATICO">AUTOMATICO</option>
                        <option value="ESTANDAR">ESTANDAR</option>
                    </select>
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="number" class="form-control" required name="ano" placeholder="año" value="">
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="precio" placeholder="precio" value="">
                </div>
                
                
                <div class="col-12 col-md-6 mt-2">
                <?php
                        include("../apis/conexion.php");
                                $vendedorAutosGet =$_GET['opcion'];
                        $query2 = "SELECT vendedorAutos,telefonoVendedor FROM vendedores ";
                        $resultado2 = $conex->query($query2);
                        
                            while($row = $resultado2->fetch_assoc()){
                                if($vendedorAutosGet == $row['vendedorAutos']){
                                $telefonoVendedor = $row['telefonoVendedor'];
                    ?>
                    <input type="number" class="form-control" required name="telefono" placeholder=<?php echo $telefonoVendedor?>  value=<?php echo $telefonoVendedor?>>
                    <?php
                                }
                            }
                    ?>
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="number" class="form-control" required name="cilindros" placeholder="cilindros" value="">
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="titulo" placeholder="titulo completo del vehiculo" value="">
                </div>
                
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="kilometraje" placeholder="kilometraje" value="">
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <select id="interiores" class="form-control" name="interior">
                        <option value="PIEL">PIEL</option>
                        <option value="TELA">TELA</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <input type="text" class="form-control" required name="combustible" placeholder="combustible" value="">
                </div>
                <div class="col-12 col-md-12 mt-2">
                    <button class="btn btn-primary form-control" type="submit" value="aceptar">Aceptar</button>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val('AUDI');
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"marca=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>
</section>
    
</body>
</html>