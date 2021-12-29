<?php

require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("GannetsGhanadi");
$log->pushHandler(new StreamHandler("application.log",Logger::INFO));

$log->info("Hello World!");
$log->info("Hallo gannets ghanadi");
