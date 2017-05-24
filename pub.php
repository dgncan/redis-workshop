<?php
# pub.php

include __DIR__ . "/vendor/autoload.php";

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '192.168.99.100',
    'port'   => 6000,
]);

$durak = $client->lpop("34");

$client->publish('34', $durak.' duragindan gecti');
   
