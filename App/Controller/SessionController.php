<?php

namespace App\Controller;

use Core\Controller;
use App\Authentication;

class SessionController extends Controller
{

    public function showAction()
    {
        $this->render('login/login.html.twig');
    }

    public function signInAction()
    {
        Authentication::login();
        $this->redirect('/');
    }

    public function logoutAction()
    {
        Authentication::logout();
        $this->redirect('/');
    }

    

}
