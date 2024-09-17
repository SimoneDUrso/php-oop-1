<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    function __construct($_title, array $_genre, $_year, $_director)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->director = $_director;
    }

    public function infoMovie()
    {
        return $this->title . " " . $this->year . " " . $this->director;
    }
}
