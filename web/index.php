<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->match('/senddrone', function () {
    return 'OK';
});

$app->run();
