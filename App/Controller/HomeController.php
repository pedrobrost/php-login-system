<?php

namespace App\Controller;

use Core\Controller;

class HomeController extends Controller
{

    public function showAction()
    {
        $this->render('home/home.html.twig', ['user_id' => $_SESSION['user_id']]);
    }

}
