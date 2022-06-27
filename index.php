<?php 

class Movie {
    private $title;
    private $genre;
    private $year;
    private $platform;

    
    function __construct($_title, $_genre, $_year, $_platform = "Cinema") {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->platform = $_platform;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getYear(){
        return $this->year;
    }
}

$el = new Movie("El Camino", "drama", 2019);

var_dump($el);

?>
