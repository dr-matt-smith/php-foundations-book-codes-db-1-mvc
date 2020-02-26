<?php


namespace Tudublin;


class WebApplication
{
    private $mainController;

    public function __construct()
    {
        $this->mainController = new MainController();
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');
        switch ($action){
            default:
                $this->mainController->listMovies();
        }
    }

}
