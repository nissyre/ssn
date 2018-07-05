<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Nissyre\ProjectInit;


$application = new Application();
$application->add(new ProjectInit());


$application->run();
