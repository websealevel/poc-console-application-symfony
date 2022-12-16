#!/bin/php
<?php

require 'vendor/autoload.php';

use Symfony\Component\Console\Application;
use Wsl\App\Commands\CreateProjectCommand;

$app = new Application();

//Register commands
$app->add(new CreateProjectCommand('create-project'));

$app->run();
