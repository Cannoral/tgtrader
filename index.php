<?php

require_once 'vendor/autoload.php';

use App\Application;
use danog\MadelineProto\API;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

(new Application())->run();
