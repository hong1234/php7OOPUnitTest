<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Demo\Command\ShowListCommand;

$application = new Application();

// ... register commands
$application->add(new ShowListCommand());

$application->run();
