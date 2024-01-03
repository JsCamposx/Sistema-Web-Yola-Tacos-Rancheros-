<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class RegistradosController
{


    public static function index(Router $router)
    {

        if (!is_admin()) {
            header('Location: /login');
        }

        $users = Usuario::all();

        
        $router->render('admin/registrados/index', [
            'titulo' => 'Usuarios',
            'users' => $users
        ]);
    }
}
