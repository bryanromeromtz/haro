<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json;charset=utf-8');  


$nombredb = "iohanes_haro";
$passdb = 'Haro2021$';
$userdb = "iohanes_haro";
$servidordb = "seminuevosharo.mx";

$email = $_GET['email'];
$password = $_GET['password'];

$con = mysqli_connect($servidordb,$userdb,$passdb,$nombredb);
$sql="SELECT COUNT(*) AS cuenta FROM clientes_usuarios AS cu WHERE cu.email = '$email' AND cu.password = '$password';";
$res = mysqli_query($con,$sql);
$res = mysqli_fetch_array($res);
if($res["cuenta"]>0){
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
        $response = array("data"=>$_GET,"result"=>false,"msg"=>"Correo electrónico o password incorrectos.");
}
mysqli_close($con);

echo json_encode($response,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);



?>