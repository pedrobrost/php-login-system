<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \App\App();
$app->handle($_SERVER['PATH_INFO']?:'/');
