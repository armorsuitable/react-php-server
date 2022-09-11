<?php

require_once __DIR__ . '/vendor/autoload.php';

use React\Http\HttpServer;
use Psr\Http\Message\ServerRequestInterface;

$http = new HttpServer(function (ServerRequestInterface $request) {
    return \React\Http\Message\Response::plaintext(
        "Hello World!\n"
    );
});


var_dump(new \App\Server\ApplicationServer);

$socket = new \React\Socket\SocketServer('0.0.0.0:8085');
$http->listen($socket);