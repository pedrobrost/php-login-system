<?php

require __DIR__ . '/../vendor/autoload.php';

session_start();

$app = new \App\App();
$app->handle($_SERVER['PATH_INFO']?:'/');
