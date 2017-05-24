<?php
// Ilgili socket surekli dinleniyor
ini_set("default_socket_timeout", -1);

require "vendor/autoload.php";

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '192.168.99.100',
    'port'   => 6000,
]);

$consumer = new Predis\PubSub\Consumer($client);

$loop = new Predis\PubSub\DispatcherLoop($consumer);

$loop->attachCallback('34', 'show'); 
$loop->run();
 
function show($data) {
    static $i = 0;
    echo ++$i . '.' . $data . PHP_EOL;
}

