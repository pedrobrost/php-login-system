<?php

namespace Core;

class Controller
{

    protected function render($template, $args = [])
    {
        View::renderTemplate($template, $args);
    }

    protected function redirect($path)
    {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
	    $protocol = 'https://'; 	
        } else 
            $protocol = 'http://';
        header('Location: ' . $protocol . $_SERVER['HTTP_HOST'] . $path, true, 303); 
        exit;

    }

}
