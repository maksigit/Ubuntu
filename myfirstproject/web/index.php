<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function () {

    return '<h1>Hello GeekHub</h1> ' .
    '<h1>Hello GeekHub</h1>';
});

$app->run();