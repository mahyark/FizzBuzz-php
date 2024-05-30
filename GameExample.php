<?php

namespace Deg540\CleanCodeKata9;
require_once __DIR__ . '/vendor/autoload.php';

$game = new Game(100);

var_dump($game->getResults());