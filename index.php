<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    function __construct($_title, $_genre, $_year, $_director)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->director = $_director;
    }

    public function infoMovie()
    {
        return $this->title . " " . $this->genre . " " . $this->year . " " . $this->director;
    }
}

$lotr = new Movie('Lord of the Ring', 'Fantasy, Adventure', '2002-01-18', 'Peter Jackson');
$sh = new Movie('Il mistero di Sleepy Hollow', 'Horror, Fantasy, Gothic', '1999-11-17', 'Tim Burton');
$twows = new Movie('The Wolf of Wall Street', 'Comedy, Black humor, Thriller', '2014-01-23', 'Martin Scorsese');

echo $lotr->infoMovie() . '<br>' . '<br>';
echo $sh->infoMovie() . '<br>' . '<br>';
echo $twows->infoMovie() . '<br>' . '<br>';
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