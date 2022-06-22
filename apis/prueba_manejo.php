<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:*');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json;charset=utf-8');  


$nombredb = "iohanes_haro";
$passdb = 'Haro2021$';
$userdb = "iohanes_haro";
$servidordb = "seminuevosharo.mx";

$response = array();

$accion = $_GET['accion'];

$con = mysqli_connect($servidordb,$userdb,$passdb,$nombredb);

if($accion=='w_prueba'){
        $id_auto = $_GET["id_auto"];
        $auto = $_GET["auto"];
        $id_cliente = $_GET["id_cliente"];
        $nombre = $_GET["nombre"];
        $email = $_GET["email"];
        $fecha = $_GET["fecha"];
        $hora = $_GET["hora"];
        $sql = "INSERT INTO citas_prueba_manejo
                                (id_auto,
                                auto,
                                id_cliente,
                                nombre,
                                email,
                                fecha,
                                hora)
                VALUES 
                        ('$id_auto',
                        '$auto',
                        '$id_cliente',
                        '$nombre',
                        '$email',
                        '$fecha',
                        '$hora');";
        if($res = mysqli_query($con,$sql)){
                $response += array('result' => true);
        }else{
                echo $sql;
                echo mysqli_error($con);
        }
}

if($accion=='r_prueba'){
        $id_cliente = $_GET["id_cliente"];
        $citas = array();
        $sql = "SELECT
                        id,
                        auto,
                        fecha,
                        TIME_FORMAT(hora,'%H:%i') AS hora
                FROM citas_prueba_manejo
                WHERE id_cliente = $id_cliente AND fecha >= DATE_FORMAT(NOW(),'%Y-%m-%d');";
        if($res = mysqli_query($con,$sql)){
                if(mysqli_num_rows($res)){
                        while ($row = mysqli_fetch_array($res)){
                                array_push($citas,$row);
                        }
                        $response += array('citas' => $citas,"result"=>true,"msg"=>"");
                }else{
                        $response += array('citas' => $citas,"result"=>false,"msg"=>"No hay registros.");
                }
        }else{
                $response = array("result"=>false,"msg"=>"No se encuentra el ususario.");
        }
        
}

if($accion=='d_prueba'){
        $id_cita = $_GET["id_cita"];
        $sql = "DELETE FROM citas_prueba_manejo
                WHERE id = $id_cita;";
        if($res = mysqli_query($con,$sql)){
                $response += array('result' => true);
        }else{
                echo $sql;
                echo mysqli_error($con);
        }
}

mysqli_close($con);

echo json_encode($response,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);



?>