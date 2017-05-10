<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/5/3
 * Time: 14:48
 */

require_once __DIR__ . '/../vendor/autoload.php';

$serv = new swoole_http_server("127.0.0.1", 9501, SWOOLE_PROCESS, SWOOLE_SOCK_TCP);
$serv->set([
    'open_http2_protocol' => true,
]);
$serv->on('request', function (swoole_http_request $request, swoole_http_response $response) {
    var_dump($request);
    $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
});
$serv->start();