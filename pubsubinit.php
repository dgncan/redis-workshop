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

$jsonstr = file_get_contents("data.json");
$arr = json_decode($jsonstr);
foreach ($arr as $saat=>$bus) {
    foreach ($bus as $kapino=>$latlng) {
        # GEOADD saat:06:00 29.141796 40.93486 TA001
        $client->geoadd("saat:".$saat,$latlng->lng, $latlng->lat, $kapino);
    }
}
