<?php
include './models/movie.php';

$lotr = new Movie('Lord of the Ring', ['Fantasy -' . ' ' . 'Adventure'], '2002-01-18', 'Peter Jackson');
$sh = new Movie('Il mistero di Sleepy Hollow', ['Horror -' . ' ' . 'Fantasy -' . ' ' . 'Gothic'], '1999-11-17', 'Tim Burton');
$twows = new Movie('The Wolf of Wall Street', ['Comedy -' . ' ' . 'Black humor -' . ' ' . 'Thriller'], '2014-01-23', 'Martin Scorsese');
