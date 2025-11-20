<?php
require_once 's1_04_n3_e1.php';

$cinema1 = new Cinema("Cinesa", "Barcelona");
$cinema1->addMovie(new Movie("Movie_1", 180, "Christopher Nolan"));
$cinema1->addMovie(new Movie("Movie_2", 114, "Flavio De Souza"));

$cinema2 = new Cinema("Yelmo", "Madrid");
$cinema2->addMovie(new Movie("Movie_3", 148, "Christopher Nolan"));
$cinema2->addMovie(new Movie("Movie_4", 155, "Ruben Alcade"));

$cinemas = [$cinema1, $cinema2];


// 1. Mostrar películas
foreach ($cinemas as $cinema) {
    echo "{$cinema->getName()} - {$cinema->getCity()}\n";
    foreach ($cinema->getMovies() as $movie) {
        echo "  • {$movie->getName()} ({$movie->getDuration()} min) - {$movie->getDirector()}\n";
    }
    echo "\n";
}

// 2. Película más larga
foreach ($cinemas as $cinema) {
    $longest = $cinema->getLongestMovie();
    echo "Longest at {$cinema->getName()}: {$longest->getName()} ({$longest->getDuration()} min)\n";
}

// 3. Buscar por director
$nolanMovies = searchByDirector($cinemas, "Christopher Nolan");
echo "\nChristopher Nolan movies:\n";
foreach ($nolanMovies as $movie) {
    echo "  • {$movie->getName()}\n";
}

?>