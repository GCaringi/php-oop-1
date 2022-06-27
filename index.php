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


$list_of_film = [
    new Movie("El Camino", "drama", 2019, "Netflix"), new Movie("Marvel's Angent Carter Sneak Peek", "hero", 2013, "Disney Plus"), new Movie("L'immortale", "drama", 2019, "TIM VISION"), new Movie("Lightyear - La vera storia di Buzz", "animation" ,2022)
];

var_dump($list_of_film);

?>
