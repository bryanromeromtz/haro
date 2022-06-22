<!DOCTYPE html>
<html lang="es-ES" class="no-js">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/5764f4dea0.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

	<link rel="stylesheet" href="https://pruebas.seminuevosharo.mx/style.css">
    <link rel="stylesheet" href="https://pruebas.seminuevosharo.mx/letra.css">
<body>

		<?php
			$url = "http://seminuevosharo.mx/json/api_autos.php";
			$json = file_get_contents($url);
			$dato = json_decode($json,true);
			//$conv = $dato["data"][0]["image"];
			$conv = $dato["data"];
			include("../apis/conexion.php");
		?>
 
	<style>
			body {
		background-color:white !important;
		font-family: "Asap", sans-serif;
		color:#989898;
		margin:10px;
		font-size:16px;
		}

		#demo {
		height:100%;
		position:relative;
		overflow:hidden;
		}


		.green{
		background-color:#6fb936;
		}
				.thumb{
					margin-bottom: 30px;
				}
				
				.page-top{
					margin-top:85px;
				}

		
		img.zoom {
			width: 100%;
			height: 200px;
			border-radius:5px;
			object-fit:cover;
			-webkit-transition: all .3s ease-in-out;
			-moz-transition: all .3s ease-in-out;
			-o-transition: all .3s ease-in-out;
			-ms-transition: all .3s ease-in-out;
		}
				
		
		.transition {
			-webkit-transform: scale(1.2); 
			-moz-transform: scale(1.2);
			-o-transform: scale(1.2);
			transform: scale(1.2);
		}
			.modal-header {
		
			border-bottom: none;
		}
			.modal-title {
				color:#000;
			}
			.modal-footer{
			display:none;  
			}

	</style>		

    <!-- Page Content -->
   				<?php
                    $query = "SELECT * FROM dato_vehiculo";
					$v2 = $_GET['titulo'];
					
					$datos = mysqli_query($conex, $query);
					
                    while($row = mysqli_fetch_array($datos)){
						if($v2 == $row['titulo']){
                ?>

			<div class="container" style="position: relative;z-index: 100; width: 100%;">
			<!--<img src="http://pruebas.seminuevosharo.mx/fotos/haro-logo.png" style="position: absolute;margin-top:-20% width: 25% !important;">-->
				<div class="row" style="width: 100%;">
					<div class="col-5 d-block d-md-none text-left">
						<img src="http://pruebas.seminuevosharo.mx/fotos/haro-logo.png" style="width: 100% !important;">
					</div>
				</div>
				<div class="row justify-content-center" style="width: 100%;">
					<div class="col-4 d-block d-md-none text-center" style="margin-top: 1%;" >
						<a href="https://pruebas.seminuevosharo.mx/index.php" class="letraInicio" style="text-decoration: none;"><i class="fa-solid fa-house tamañoIcono"></i> Inicio</a>
					</div>
					<div class="col-5 d-block d-md-none text-center" style="margin-top: 1%;">
						<a href="#tema1" class="letraInicio" style="text-decoration: none;"><i class="fa-solid fa-car tamañoIcono"></i> Vehículos</a>
					</div>
					<div class="col-3 d-block d-md-none text-center" style="margin-top: 1%;">
						<a href="https://api.whatsapp.com/send?phone=<?php echo $row['telefono']?>"><i class="fa fa-whatsapp" style="font-size: 220%;color: #6fb936;margin-top:-7%;" aria-hidden="true"></i></a>
					</div>
						
				</div>
			</div>

			<div class="container" style="position: relative;z-index: 100; width: 100%;">
				<div class="row justify-content-center" style="width: 100%;">
					<div class="col-3 d-none d-md-block text-left">
						<img src="http://pruebas.seminuevosharo.mx/fotos/haro-logo.png" style="position: absolute; width: 50% !important;">
					</div>
					<div class="col-3 d-none d-md-block text-center" style="margin-top: 1%;" >
						<a href="https://pruebas.seminuevosharo.mx/index.php" class="letraInicio" style="text-decoration: none;"><i class="fa-solid fa-house tamañoIcono"></i> Inicio</a>
					</div>
					<div class="col-3 d-none d-md-block text-center" style="margin-top: 1%;">
						<a href="#tema1" class="letraInicio" style="text-decoration: none;"><i class="fa-solid fa-car tamañoIcono"></i> Vehículos</a>
					</div>
					<div class="col-3 d-none d-md-block text-center" style="margin-top: 2%;">
						<a href="https://api.whatsapp.com/send?phone=<?php echo $row['telefono']?>"><i class="fa fa-whatsapp" style="font-size: 220%;color: #6fb936;margin-top:-7%;" aria-hidden="true"></i></a>
					</div>
						
				</div>
			</div>
	<div class="container-fluid" style="margin-top:2%">
					<div class="row">
						<div class="col-7 text-left">
							<h2 class='title'>
								<?php echo $row['titulo'] ?>
							</h2>
						</div>
						<div class="col-1"></div>
						<div class="col-3  text-right">
							<div >
								<h2 style="text-align: center;">$<?php echo  number_format($row["precio"],0,'.',',') ?></h2>
							</div>
						</div>
						<div class="col-1"></div>
					</div>
                        

        <div class="row">

            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto1'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto1'] ?>">
                </a>
            </div>
			<div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto2'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto2'] ?>">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto3'] ?>"  class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto3'] ?>">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto4'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto4'] ?>">
                </a>
            </div>
            
             <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto5'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto5'] ?>">
                </a>
            </div>
            
             <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto6'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto6'] ?>">
                </a>
            </div>
            
             <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto7'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto7'] ?>">
                </a>
            </div>
            
             <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto8'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto8'] ?>">
                </a>
            </div>

			<div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto9'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto9'] ?>">
                </a>
            </div>

			<div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto10'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto10'] ?>">
                </a>
            </div>

			<div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto11'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto11'] ?>">
                </a>
            </div>
			
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto12'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto12'] ?>">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto13'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto13'] ?>">
                </a>
            </div>

			<div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto14'] ?>" class="fancybox" rel="ligthbox">
					<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto14'] ?>">
                </a>
            </div>

			<div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a href="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto15'] ?>" class="fancybox" rel="ligthbox">
				<img class="zoom img-fluid" src="http://pruebas.seminuevosharo.mx/img_servidor/lista_fotos/<?php echo $row['listaFoto15'] ?>">
                </a>
            </div>
             
       </div>

    </div>
	
		<script>
					$(document).ready(function(){
			$(".fancybox").fancybox({
					openEffect: "none",
					closeEffect: "none"
				});
				
				$(".zoom").hover(function(){
					
					$(this).addClass('transition');
				}, function(){
					
					$(this).removeClass('transition');
				});
			});
		
		</script>
		<!--
<div class="slider__btn"></div>
	<div class="stm-car-listing-data-single stm-border-top-unit ">
		<div class="title heading-font">
			Detalles del coche
		</div>
	</div>
<div class="stm-single-car-listing-data">
		<table class='stm-table-main'>
		<tr>
						<td>
							<table class='inner-table'>
								<tr>
									<td class='label-td'>
										<i class='stm-service-icon-body_type'></i>
											Tipo									
									</td>
									<td class='heading-font'>										
											<?php echo $row['tipo'] ?>
									</td>
								</tr>
							</table>
						</td>
				<td class='divider-td'></td>				
						<td>
							<table class='inner-table'>
								<tr>
									<td class='label-td'>
										<i class='stm-icon-road'></i>
											Kilometraje									
									</td>
									<td class='heading-font'>										
												<?php echo $row['kilometraje'] ?> Km
									</td>
								</tr>
							</table>
						</td>
				<td class='divider-td'></td>	
						<td>
							<table class='inner-table'>
								<tr>
									<td class='label-td'>
										<i class='stm-icon-fuel'></i>
											Combustible									
									</td>
									<td class='heading-font'>										
											<?php echo $row['combustible'] ?> 
									</td>
								</tr>
							</table>
						</td>
						<td class='divider-td'>
						</td>
		</tr>
				<tr/>	
					<td>
						<table class='inner-table'>
							<tr>
								<td class='label-td'>
									<i class='stm-icon-transmission_fill'></i>
										Transmision									
								</td>
								<td class='heading-font'>										
										<?php echo $row['transmision'] ?>
								</td>
							</tr>
						</table>
					</td>
					<td class='divider-td'></td>
						<td>
							<table class='inner-table'>
								<tr>
									<td class='label-td'>
										<i class='stm-icon-drive_2'></i>
											Manejo									
									</td>
									<td class='heading-font'>
												N/A
									</td>
								</tr>
							</table>
						</td>
					<td class='divider-td'></td>
						<td>
							<table class='inner-table'>
								<tr>
									<td class='label-td'>
										<i class='stm-service-icon-color_type'></i>
											Interior									
									</td>
									<td class='heading-font'>
												Piel
									</td>
								</tr>
							</table>
						</td>
					<td class='divider-td'></td>
				</tr>
				<tr/>	
					<td>
						<table class='inner-table'>
							<tr>
								<td class='label-td'>
									<i class='stm-icon-engine_fill'></i>
										Cilindros									
								</td>
								<td class='heading-font'>										
											<?php echo $row['cilindros'] ?>
								</td>
							</tr>
						</table>
					</td>
					<td class='divider-td'></td>

					<td>
						<table class='inner-table'>
							<tr>
								<td class='label-td'>
									<i class='stm-icon-key'></i>
										Registrado									
								</td>
								<td class='heading-font'>
											N/A
								</td>
							</tr>
						</table>
					</td>
					<td class='divider-td'></td>	
					<td>
						<table class='inner-table'>
							<tr>
								<td class='label-td'>
									<i class='stm-icon-time'></i>
										Historial									
								</td>
								<td class='heading-font'>	
											N/A
								</td>
							</tr>
						</table>
					</td>
					<td class='divider-td'></td>
				</tr>
				<tr/>
					<td>
						<table class='inner-table'>
							<tr>
								<td class='label-td'>
									<i class='stm-service-icon-hashtag'></i>
										Stock id									
								</td>
								<td class='heading-font'>										
										<?php echo $row['id'] ?>
								</td>
							</tr>
						</table>
					</td>
					<td class='divider-td'></td>

					<td>
						<table class='inner-table'>
							<tr>
								<td class='label-td'>
									<i class='stm-service-icon-vin_check'></i>
										VIN: 									
								</td>
							</td>
							</tr>
						</table>
					</td>
					<td class='divider-td'></td>

				</tr>
		</table>
		<?php      
                        				
                        }
					}
                ?>	
	</div>
				-->
	</body>

</html>