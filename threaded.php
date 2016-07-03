<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$name = 'Threaded';
$version = '1.0.1';

$commands = [];

$app = new Application($name, $version);
$app->addCommands($commands);

$app->run();