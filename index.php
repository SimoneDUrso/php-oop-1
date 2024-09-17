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

$lotr = new Movie('Lord of the Ring', ['Fantasy' . ' ' . 'Adventure'], '2002-01-18', 'Peter Jackson');
$sh = new Movie('Il mistero di Sleepy Hollow', ['Horror' . ' ' . 'Fantasy' . ' ' . 'Gothic'], '1999-11-17', 'Tim Burton');
$twows = new Movie('The Wolf of Wall Street', ['Comedy' . ' ' . 'Black humor' . ' ' . 'Thriller'], '2014-01-23', 'Martin Scorsese');

// echo $lotr->infoMovie() . '<br>' . '<br>';
// echo $sh->infoMovie() . '<br>' . '<br>';
// echo $twows->infoMovie() . '<br>' . '<br>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-oop-1</title>
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-title">
                        <h2><strong>Title: </strong><?php echo $lotr->title ?></h2>
                    </div>
                    <div class="card-body fs-4">
                        <p><strong>Genre:</strong>
                            <?php foreach ($lotr->genre as $item)
                                echo $item;
                            ?>
                        </p>
                        <p><strong>Anno di uscita: </strong> <?php echo $lotr->year ?> </p>
                        <p> <strong>Regista: </strong> <?php echo $lotr->director ?> </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-title">
                        <h2><strong>Title: </strong><?php echo $sh->title ?></h2>
                    </div>
                    <div class="card-body fs-4">
                        <p><strong>Genre:</strong>
                            <?php foreach ($sh->genre as $item)
                                echo $item;
                            ?>
                        </p>
                        <p><strong>Anno di uscita: </strong> <?php echo $sh->year ?> </p>
                        <p> <strong>Regista: </strong> <?php echo $sh->director ?> </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-title">
                        <h2><strong>Title: </strong><?php echo $twows->title ?></h2>
                    </div>
                    <div class="card-body fs-4">
                        <p><strong>Genre:</strong>
                            <?php foreach ($twows->genre as $item)
                                echo $item;
                            ?>
                        </p>
                        <p><strong>Anno di uscita: </strong> <?php echo $twows->year ?> </p>
                        <p> <strong>Regista: </strong> <?php echo $twows->director ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>