<?php

namespace App;

use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;

class RouterFactory
{
    public function createRouter(): RouteList
    {
        $router = new RouteList;
        $router->addRoute('', 'Home:default');
        $router->addRoute('<presenter>/<action>[/<id>]', 'Home:default');
        return $router;
    }
}