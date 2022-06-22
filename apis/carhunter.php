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

if($accion=='r_catcarhunter'){
        $marcas = array();
        $interiores = array();
        $adicionales = array();
        $cilindros = array();
        $transmision = array();

        $sql = "SELECT id,marca FROM clientes_listaMarcas;";
        $res = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($res)) {
                array_push($marcas,array('id'=>$row['id'],'marca'=>$row['marca']));
        }
        $response += array('marcas' => $marcas);

        $sql = "SELECT id,interior FROM clientes_listaInteriores;";
        $res = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($res)) {
                array_push($interiores,array('id'=>$row['id'],'interior'=>$row['interior']));
        }
        $response += array('interiores' => $interiores);

        $sql = "SELECT id,adicional FROM clientes_listaAdicionales;";
        $res = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($res)) {
                array_push($adicionales,array('id'=>$row['id'],'adicional'=>utf8_encode($row['adicional'])));
        }
        $response += array('adicionales' => $adicionales);
        
        $sql = "SELECT id,cilindros FROM clientes_listaCilindros;";
        $res = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($res)) {
                array_push($cilindros,array('id'=>$row['id'],'cilindros'=>$row['cilindros']));
        }
        $response += array('cilindros' => $cilindros);

        $sql = "SELECT id,transmision FROM clientes_listaTransmisiones;";
        $res = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($res)) {
                array_push($transmision,array('id'=>$row['id'],'transmision'=>utf8_encode($row['transmision'])));
        }
        $response += array('transmisiones' => $transmision);

        
}

if($accion=='w_carhunter'){        
        $id_cliente = $_GET["id_cliente"];
        $adicionales = $_GET["adicionales"];
        $cilindros = $_GET["cilindros"];
        $interiores = $_GET["interiores"];
        $marcas = $_GET["marcas"];
        $transmisiones = $_GET["transmisiones"];
        $precios = $_GET["precios"];

        $sql = "INSERT INTO clientes_carhunter
                                (id_cliente,
                                adicionales,
                                cilindros,
                                interiores,
                                marcas,
                                transmisiones,
                                precios)
                VALUES 
                        ('$id_cliente',
                        '$adicionales',
                        '$cilindros',
                        '$interiores',
                        '$marcas',
                        '$transmisiones',
                        '$precios')
                ON DUPLICATE KEY UPDATE
                        adicionales = '$adicionales',
                        cilindros = '$cilindros',
                        interiores = '$interiores',
                        marcas = '$marcas',
                        transmisiones = '$transmisiones',
                        precios = '$precios';";
        if($res = mysqli_query($con,$sql)){
                $response += array('result' => true);
        }
}

if($accion=='r_carhunter'){
        $carhunter = array();
        $id_cliente = $_GET["id_cliente"];

        $sql = "SELECT count(*) AS cuenta FROM clientes_carhunter WHERE id_cliente = $id_cliente;";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($res);
        $val = $row[0];

        
        if($val>0){
                $sql = "SELECT * FROM clientes_carhunter WHERE id_cliente = $id_cliente;";
                $res = mysqli_query($con,$sql);                
                while ($row = mysqli_fetch_array($res)) {
                        $aux = "  ";
                        $id_aux = $row['adicionales'];
                        $sql2 = "SELECT adicional FROM clientes_listaAdicionales WHERE id IN ($id_aux);";
                        $res2 = mysqli_query($con,$sql2);
                        while ($row2 = mysqli_fetch_array($res2)) {
                                $aux = $aux.utf8_encode($row2[0]).", ";
                        }
                        $carhunter += array('adicionales' => substr($aux, 0, -2));

                        $aux = "  ";
                        $id_aux = $row['cilindros'];
                        $sql2 = "SELECT cilindros FROM clientes_listaCilindros WHERE id IN ($id_aux);";
                        $res2 = mysqli_query($con,$sql2);
                        while ($row2 = mysqli_fetch_array($res2)) {
                                $aux = $aux.utf8_encode($row2[0])." cilindros , ";
                        }
                        $carhunter += array('cilindros' => substr($aux, 0, -2));

                        $aux = "  ";
                        $id_aux = $row['interiores'];
                        $sql2 = "SELECT interior FROM clientes_listaInteriores WHERE id IN ($id_aux);";
                        $res2 = mysqli_query($con,$sql2);
                        while ($row2 = mysqli_fetch_array($res2)) {
                                $aux = $aux.utf8_encode($row2[0]).", ";
                        }
                        $carhunter += array('interiores' => substr($aux, 0, -2));

                        $aux = "  ";
                        $id_aux = $row['marcas'];
                        $sql2 = "SELECT marca FROM clientes_listaMarcas WHERE id IN ($id_aux);";
                        $res2 = mysqli_query($con,$sql2);
                        while ($row2 = mysqli_fetch_array($res2)) {
                                $aux = $aux.utf8_encode($row2[0]).", ";
                        }
                        $carhunter += array('marcas' => substr($aux, 0, -2));

                        $aux = "  ";
                        $id_aux = $row['transmisiones'];
                        $sql2 = "SELECT transmision FROM clientes_listaTransmisiones WHERE id IN ($id_aux);";
                        $res2 = mysqli_query($con,$sql2);
                        while ($row2 = mysqli_fetch_array($res2)) {
                                $aux = $aux.utf8_encode($row2[0]).", ";
                        }
                        $carhunter += array('transmisiones' => substr($aux, 0, -2));

                        $carhunter += array('precios' => $row['precios']);

                        $response += $carhunter;
                }
        
        }else{
                $response = false;

        }
        
                
}

mysqli_close($con);

echo json_encode($response,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);



?>