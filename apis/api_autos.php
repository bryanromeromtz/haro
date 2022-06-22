<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/


$servidordb = "seminuevosharo.mx";

$userdb = "iohanes_haro";

$passdb = 'Haro2021$';

$nombredb = "iohanes_haro";

$response = array();

$posts = array();

$images = array();

$buscar = $_GET["buscar"];



$precio_minimo = $_GET["p_min"];

$precio_maximo = $_GET["p_max"];

if ($precio_minimo && $precio_maximo) {

    $precio_filtro = "t_price.meta_value BETWEEN $precio_minimo AND $precio_maximo ";
} else {

    $precio_filtro = "TRUE ";
}



$con = mysqli_connect($servidordb, $userdb, $passdb, $nombredb);

$sql = "SELECT

    wpwp_posts.ID,
    wpwp_posts.post_title,
    t_image.guid AS image,
    t_body.name AS body,
    t_fuel.name AS fuel,
    t_transmission.name AS transmission,
    t_mileage.meta_value AS mileage,
    t_price.meta_value AS price

    FROM

    wpwp_posts 

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_posts.guid FROM wpwp_postmeta INNER JOIN wpwp_posts ON (wpwp_postmeta.meta_value = wpwp_posts.ID) WHERE meta_key = '_thumbnail_id') AS t_image ON (wpwp_posts.ID = t_image.post_id)

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_terms.name FROM wpwp_postmeta INNER JOIN wpwp_terms ON (wpwp_postmeta.meta_value = wpwp_terms.slug) WHERE meta_key = 'body') AS t_body ON (wpwp_posts.ID = t_body.post_id)

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_terms.name FROM wpwp_postmeta INNER JOIN wpwp_terms ON (wpwp_postmeta.meta_value = wpwp_terms.slug) WHERE meta_key = 'fuel') AS t_fuel ON (wpwp_posts.ID = t_fuel.post_id)

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_terms.name FROM wpwp_postmeta INNER JOIN wpwp_terms ON (wpwp_postmeta.meta_value = wpwp_terms.slug) WHERE meta_key = 'transmission') AS t_transmission ON (wpwp_posts.ID = t_transmission.post_id)

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_postmeta.meta_value FROM wpwp_postmeta WHERE meta_key = 'mileage') AS t_mileage ON (wpwp_posts.ID = t_mileage.post_id)

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_postmeta.meta_value FROM wpwp_postmeta WHERE meta_key = 'price') AS t_price ON (wpwp_posts.ID = t_price.post_id)

    WHERE

     post_type = 'listings' 

     AND post_status = 'publish' 

     AND CONCAT(wpwp_posts.post_title,t_body.name,t_fuel.name,t_transmission.name) LIKE '%$buscar%'

     AND $precio_filtro

    ORDER BY post_date DESC";

$res = mysqli_query($con, $sql);

$cont = 0;



while ($row = mysqli_fetch_array($res)) {

    $id = $row['ID'];

    $title = $row['post_title'];



    $stack = array('id' => $id, 'titulo' => utf8_encode($title), 'image' => $row['image'], 'body' => utf8_encode($row['body']), 'fuel' => utf8_encode($row['fuel']), 'transmission' => utf8_encode($row['transmission']), 'mileage' => $row['mileage'], 'price' => $row['price']);



    /*$sql2="SELECT * FROM wpwp_postmeta WHERE post_id = '$id'";

    $res2 = mysqli_query($con,$sql2);

    while ($row2 = mysqli_fetch_array($res2)){

        $stack += array($row2['meta_key'] => $row2['meta_value']);

    }



    $tumbail_id = $stack['_thumbnail_id'];

    $sql2="SELECT * FROM wpwp_postmeta WHERE post_id = '$tumbail_id' AND meta_key = '_wp_attached_file'";

    $res2 = mysqli_query($con,$sql2);

    $row2 = mysqli_fetch_array($res2);

    $stack += array('image' => "https://seminuevosharo.mx/wp-content/uploads/".$row2['meta_value']);



    $sql2="SELECT * FROM wpwp_posts WHERE post_parent = $id AND post_mime_type = 'image/jpeg'";

    $res2 = mysqli_query($con,$sql2);

    while ($row2 = mysqli_fetch_array($res2)){

        array_push($images,$row2['guid']);

    }

    $stack += array('images' => $images);*/



    $posts[] = $stack; 

    $stack = array();

    $images = array();
}



$response['data'] = $posts;

header('Access-Control-Allow-Origin:*');

header('Access-Control-Allow-Methods:*');

header('Access-Control-Allow-Headers:*');

header('Content-Type: application/json;charset=utf-8');

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);



/*$fp = fopen('results.json', 'w');

fwrite($fp, json_encode($response));

fclose($fp);*/



@mysqli_close($con);
