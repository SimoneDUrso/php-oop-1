<?php
include './db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-oop-1</title>
</head>

<body>
    <div class="container pt-5">
        <h1 class="text-center mb-5 fw-bold">MOVIES</h1>
        <div class="row">
            <!-- primo film -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card text-center px-2">
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
            <!-- secondo film -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card text-center px-2">
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
            <!-- terzo film -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card text-center px-2">
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