<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json;charset=utf-8');  


$nombredb = "iohanes_haro";
$passdb = 'Haro2021$';
$userdb = "iohanes_haro";
$servidordb = "seminuevosharo.mx";


$nombre = $_GET['nombre'];
$aPaterno = $_GET['aPaterno'];
if(!$aPaterno){
        $aPaterno = "";
}
$aMaterno = $_GET['aMaterno'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$password = $_GET['password'];
$notificar = $_GET['notificar'];

$con = mysqli_connect($servidordb,$userdb,$passdb,$nombredb);
$sql="INSERT INTO 
        clientes_usuarios (
                clientes_usuarios.nombre,
                clientes_usuarios.aPaterno,
                clientes_usuarios.aMaterno,
                clientes_usuarios.email,
                clientes_usuarios.telefono,
                clientes_usuarios.password,
                clientes_usuarios.notificar)
        VALUES ('$nombre','$aPaterno','$aMaterno','$email','$telefono','$password',$notificar);";
if($res = mysqli_query($con,$sql)){
//if(true){
        $sql="SELECT
                cu.id,
                cu.nombre,
                cu.aPaterno,
                cu.aMaterno,
                cu.email,
                cu.telefono,
                cu.notificar,
                cu.id AS access_token,
                '0' AS expires_in
        FROM
                clientes_usuarios AS cu
        WHERE email = '$email';";
        $res = mysqli_query($con,$sql);
        $res = mysqli_fetch_array($res);
        $response = array("cliente"=>$res,"result"=>true,"msg"=>"");
}else{
        $response = array("result"=>false,"msg"=>"El telefono o correo electrónico ya fue registrado.");
}
mysqli_close($con);

echo json_encode($response,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);



?>