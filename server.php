<?php

use Src\Services\WsService;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

require __DIR__.'/vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new WsService()
        )
    ),
    8080
);

$server->run();
