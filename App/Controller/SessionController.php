<?php

namespace App\Controller;

use Core\Controller;

class SessionController extends Controller
{

    public function showAction()
    {
        $this->render('login/login.html.twig');
    }

}
