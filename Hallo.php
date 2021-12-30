<?php

require_once __DIR__ . "/vendor/autoload.php";

use Gannetsghanadi\BelajarComposer\Customer;

$customer = new Customer("gannets");
echo $customer->sayHello("Gordon");