<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


include_once '../include/config.php';
include_once '../objects/movie.php';


$database = new Database();
$db = $database->getConnection();


$movie = new Movie($db);


$movie->title = isset($_GET['title']) ? $_GET['title'] : die();


$movie_arr=$movie->readOne();




print_r(json_encode($movie_arr));
?>
