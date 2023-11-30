<?php

namespace Controllers;

use MVC\Router;

class PaginasController
{
    public static function index(Router $router)
    {


        $router->render('paginas/index', [
            'titulo' => 'Inicio'
        ]);
    }


    public static function about(Router $router)
    {


        $router->render('paginas/about', [
            'titulo' => 'Sobre Nosotros'
        ]);
    }

    public static function error(Router $router)
    {


        $router->render('paginas/error', [
            'titulo' => 'Error'
        ]);
    }

    public static function platos(Router $router)
    {


        $router->render('paginas/platos', [
            'titulo' => 'Nuestros Platos'
        ]);
    }
}
