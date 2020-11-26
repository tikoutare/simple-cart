<?php

require __DIR__.'/vendor/autoload.php';


$logger = new \Monolog\Logger('dev');
$logger->pushHandler(new \Monolog\Handler\StreamHandler('app.log'));
$logger->debug('Start debugging...');
$cart = new SimpleCart\Cart();