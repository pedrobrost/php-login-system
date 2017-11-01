<?php

namespace Core;

class View
{

    public static function renderTemplate($template, $args)
    {
        static $twig = null;

        if (is_null($twig)) {
            $loader = new \Twig_Loader_Filesystem('../App/View');
            $twig = new \Twig_Environment($loader);
        }

        echo $twig->render($template, $args);
    }

}
