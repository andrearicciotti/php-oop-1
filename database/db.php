<?php
require_once __DIR__ . '/../models/movie.php';
require_once __DIR__ . '/../models/genre.php';

$action = new Genre('action');
$fantasy = new Genre('fantasy');

$movies = [$titanic = new Movie('Titanic', '1997-12-19', 'USA', 'James Cameron', [$action, $fantasy]), $grease = new Movie('Grease', '1978-08-30', 'USA', 'Randal Kleiser', [$action, $fantasy])];
