<?php

namespace App\Mode1;

class User
{
    public int $age;
    public array $film_favoris = [];
    public string $nom;

    /**
     * @param int $age
     * @param string $nom
     */
    public function __construct(int $age, string $nom)
    {
        $this->age = $age;
        $this->nom = $nom;
    }

    public function afficherNom(): string
    {
        return "Je m'appelle " . $this->nom . "et j'ai " . $this->age . " ans.";
    }

    public function afficherAge(): string 
    {
        return "J'ai " . $this->age . " ans.";
    }

    public function ajouterFilmsFavoris(string $film): bool
    {
        $this->films_favoris[] = $film;
        return true;
    }

    public function supprimerFilmsFavoris(string $films): bool 
    {
        if (!in_array($film, $this->films_favoris)) throw new InvalidArgumentExeption("Film inconnu: " . $film);
        unset($this->films_favoris[array_search($film, $this->films_favoris)]);
        return true;
    }
}
?>