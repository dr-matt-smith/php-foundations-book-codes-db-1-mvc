<?php


namespace Tudublin;

use Tudublin\MovieRepository;

class MainController
{
    private $movieRepository;

    public function __construct()
    {
        $this->movieRepository = new MovieRepository();
    }

    public function listMovies()
    {
        $movies = $this->movieRepository->findAll();

        require_once __DIR__ . '/../templates/list.php';
    }

}
