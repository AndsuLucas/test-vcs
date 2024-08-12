<?php

require_once __DIR__ . '/vendor/autoload.php';

use Andsudev\TestVcs\CheckRedisConnection;

$checker = new CheckRedisConnection();
$checker->handle();