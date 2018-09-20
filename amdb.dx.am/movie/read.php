<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once '../include/config.php';
include_once '../objects/movie.php';

$database = new Database();
$db = $database->getConnection();


$movie = new Movie($db);


$stmt = $movie->read();
$num = $stmt->rowCount();

if($num>0){


    $products_arr=array();
    $products_arr["records"]=array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        $product_item=array(
          "id" => $id,
          "title" =>$title,
          "release_date" =>$release_date,
          "runtime" =>$runtime,
          "vote_average" =>$vote_average,
          "overview" => html_entity_decode($overview),
          "budget" => $budget,
          "tagline" => $tagline,
          "homepage"=>$homepage,
          "production_countries"=>$production_countries,
          "production_companies"=>$production_companies,
          "status"=>$status,
          "original_language"=>$original_language
        );

        array_push($products_arr["records"], $product_item);
    }

    echo json_encode($products_arr);
}

else{
    echo json_encode(
        array("message" => "No products found.")
    );
}
?>
