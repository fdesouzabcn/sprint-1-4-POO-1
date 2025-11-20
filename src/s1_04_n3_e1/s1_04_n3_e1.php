<?php

declare(strict_types=1);

class Movie 
{
    private string $name;
    private int $duration;
    private string $director;
    
    public function __construct(string $name, int $duration, string $director)
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->director = $director;
    }
    
    public function getName(): string { return $this->name; }
    public function getDuration(): int { return $this->duration; }
    public function getDirector(): string { return $this->director; }
}

class Cinema 
{
    private string $name;
    private string $city;
    private array $movies = [];
    
    public function __construct(string $name, string $city)
    {
        $this->name = $name;
        $this->city = $city;
    }
    
    public function getName(): string { return $this->name; }
    public function getCity(): string { return $this->city; }
    public function getMovies(): array { return $this->movies; }
    
    public function addMovie(Movie $movie): void
    {
        $this->movies[] = $movie;
    }
    
    public function getLongestMovie(): ?Movie 
    {
        if (empty($this->movies)) return null;
        
        $longest = $this->movies[0];
        foreach ($this->movies as $movie) {
            if ($movie->getDuration() > $longest->getDuration()) {
                $longest = $movie;
            }
        }
        return $longest;
    }
}
    

function searchByDirector(array $cinemas, string $director): array
{
    $found = [];
    
    foreach ($cinemas as $cinema) {
        foreach ($cinema->getMovies() as $movie) {
            if (strtolower($movie->getDirector()) === strtolower($director)) {
                $found[] = $movie;
            }
        }
    }
    
    return $found;
}

?>