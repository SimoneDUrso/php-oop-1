<?php
class Movie
{
    public $title;
    public $genre;
    public $plot;
    public $year;
    public $director;

    function __construct($_title, $_genre, $_plot, $_year, $_director)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->plot = $_plot;
        $this->year = $_year;
        $this->director = $_director;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>

</body>

</html>