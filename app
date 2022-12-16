#!/bin/php
<?php

require 'vendor/autoload.php';

use Symfony\Component\Console\Application;
use Wsl\App\Commands\CreateProjectCommand;
use Wsl\App\Commands\SayHiCommand;

$app = new Application('My app', '1.0');

//Register commands
$app->add(new CreateProjectCommand('create-project'));
$app->add(new SayHiCommand('say-hi'));

$app->run();
