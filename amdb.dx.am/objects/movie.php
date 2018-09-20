<?php
class Movie{


    private $conn;
    private $table_name = "movies";


    public $id;
    public $title;
    public $genres;
    public $homepage;
    public $popularity;
    public $budget;
    public $release_date;
    public $runtime;
    public $vote_average;
    public $tagline;
    public $production_countries;
    public $production_companies;
    public $overview;
    public $original_language;
    public $status;


    public function __construct($db){
        $this->conn = $db;
    }


function read(){


    $query =  "SELECT * FROM movies";

    $stmt = $this->conn->prepare($query);


    $stmt->execute();

    return $stmt;
}
function readOne(){
$this->title=ucfirst($this->title);

    $query = "SELECT * FROM `movies` WHERE title LIKE '$this->title'";


    $stmt = $this->conn->prepare( $query );

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return ($row);


}
function search($keywords){
  $keywords=htmlspecialchars(strip_tags($keywords));
  $keywords = "%{$keywords}%";
    $query = "SELECT *
            FROM movies WHERE `title` LIKE '$keywords' OR `release_date` LIKE '$keywords' OR `production_companies` LIKE '$keywords'";


    $stmt = $this->conn->prepare($query);


    $stmt->execute();

    return $stmt;
}

}
