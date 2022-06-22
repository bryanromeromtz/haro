<?php 
include("../apis/conexion.php");
$marca=$_POST['marca'];

	$sql="SELECT id,
			 id_marcas,
			 tipo_de_carro 
		from t_carros
		where id_marcas='$marca'";

	$result=mysqli_query($conex,$sql);

	$cadena="
			<select id='lista2' class='form-control' name='tipo'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[2].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

?>