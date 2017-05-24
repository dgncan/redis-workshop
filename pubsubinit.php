<?php
# pubsubinit.php

include __DIR__ . "/vendor/autoload.php";

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '192.168.99.100',
    'port'   => 6000,
]);

$client->del("34");

$client->rpush("34","AVCILAR");
$client->rpush("34","INCIRLI");
$client->rpush("34","CEVIZLIBAG");
$client->rpush("34","ZINCIRLIKUYU");
