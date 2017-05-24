<?php
#  client.php

include __DIR__ . "/vendor/autoload.php";

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '192.168.99.100',
    'port'   => 6000,
]);

$status = $client->set("user1", "Dogan Can");
echo "set sonucu:".$status;
echo "\n";

$result = $client->get("user1");
echo "get sonucu:\n";
var_dump($result);

