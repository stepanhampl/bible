<?php

require __DIR__ . '/../vendor/autoload.php';

use Nette\Bootstrap\Bootstrap;

$container = require __DIR__ . '/../app/bootstrap.php';

$app = $container->getByType(Nette\Application\Application::class);
$app->run();
