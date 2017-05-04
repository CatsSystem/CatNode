<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/5/3
 * Time: 14:48
 */

require_once __DIR__ . '/../vendor/autoload.php';

$client = new \Etcdserverpb\KVClient('172.20.111.172:2379', [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);

$request = new \Etcdserverpb\RangeRequest();
$request->setKey("Hello");
list($reply, $status) = $client->Range($request)->wait();
if ($reply instanceof \Etcdserverpb\RangeResponse)
{
    var_dump($reply->getCount());
}
