<?php

$servidordb="seminuevosharo.mx";

$userdb="iohanes_haro";

$passdb='Haro2021$';

$nombredb="iohanes_haro";

$response = array();

$posts = array();

$stack = array();

$images = array();

$id = $_GET["id"];



$con = mysqli_connect($servidordb,$userdb,$passdb,$nombredb);

$sql="SELECT

    wpwp_posts.ID AS 'id',

    t_additional_features.meta_value AS 'additionalFeatures',

    t_interior_color.name AS 'interiorColor',

    t_cilindros.meta_value AS 'cilindros',

    t_transmission.name AS 'transmission'

    FROM

    wpwp_posts

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_postmeta.meta_value FROM wpwp_postmeta WHERE wpwp_postmeta.meta_key = 'additional_features') AS t_additional_features ON (wpwp_posts.ID = t_additional_features.post_id)

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_terms.name FROM wpwp_postmeta INNER JOIN wpwp_terms ON (wpwp_postmeta.meta_value = wpwp_terms.slug) WHERE meta_key = 'interior-color') AS t_interior_color ON (wpwp_posts.ID = t_interior_color.post_id)

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_postmeta.meta_value FROM wpwp_postmeta WHERE wpwp_postmeta.meta_key = 'cilindros') AS t_cilindros ON (wpwp_posts.ID = t_cilindros.post_id)

    INNER JOIN (SELECT DISTINCT wpwp_postmeta.post_id, wpwp_terms.name FROM wpwp_postmeta INNER JOIN wpwp_terms ON (wpwp_postmeta.meta_value = wpwp_terms.slug) WHERE meta_key = 'transmission') AS t_transmission ON (wpwp_posts.ID = t_transmission.post_id)



    WHERE

    wpwp_posts.ID = $id";

$res = mysqli_query($con,$sql);

$row = mysqli_fetch_array($res);



$stack = array('additionalFeatures'=> utf8_encode($row['additionalFeatures']),'interiorColor'=> utf8_encode($row['interiorColor']),'cilindros'=> $row['cilindros'],'transmission'=> utf8_encode($row['transmission']));



$sql="SELECT * FROM wpwp_posts WHERE post_parent = $id AND post_mime_type = 'image/jpeg'";

$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($res)) {

    array_push($images,$row['guid']);

}

$stack += array('images' => $images); 



$posts[] = $stack; //print_r($posts);



$response['data'] = $posts; 

header('Access-Control-Allow-Origin:*');

header('Access-Control-Allow-Methods:*');

header('Access-Control-Allow-Headers:*');

header('Content-Type: application/json;charset=utf-8');  

echo json_encode($response,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);



/*$fp = fopen('results.json', 'w');

fwrite($fp, json_encode($response));

fclose($fp);*/



@mysqli_close($con);
