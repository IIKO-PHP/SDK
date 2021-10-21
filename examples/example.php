<?php

require __DIR__.'/../vendor/autoload.php';

use IikoPhp\SDK\Factory;

$factory = new Factory(
    new \GuzzleHttp\Client(), new \Tuupola\Http\Factory\RequestFactory(), new \Tuupola\Http\Factory\StreamFactory()
);

$cloud = $factory->cloud('secret');


var_dump($cloud->general->nomenclature->stopLists);
