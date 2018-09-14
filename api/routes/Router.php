<?php

namespace routes;

use Klein\Klein;
use controllers\MainController;

class Router
{
    private $router;

    public function __construct()
    {
        $this->router = new Klein();
        $this->example();
        $this->router->dispatch();
    }

    public function example()
    {
        $c = new MainController();
        $c->example();
    }
}