<?php
# pub.php

include __DIR__ . "/vendor/autoload.php";

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '192.168.99.100',
    'port'   => 6000,
]);

$arr = $client->geopos("saat:18:30","M3016", "M2523");
print_r($arr);
   
