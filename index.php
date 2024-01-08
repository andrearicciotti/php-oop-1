<?php
require_once __DIR__ . '/models/movie.php';

$titanic = new Movie('Titanic', '1997-12-19', 'USA', 'James Cameron'); // creazione istanze della classe Movie
$grease = new Movie('Grease', '1978-08-30', 'USA', 'Randal Kleiser');

var_dump($titanic, $grease, $grease->movieInfo($grease), $titanic->movieInfo($titanic));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
</body>
</html>