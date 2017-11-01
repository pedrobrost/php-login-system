<?php

namespace Core;

class Controller
{

    protected function render($template, $args = [])
    {
        View::renderTemplate($template, $args);
    }

}
