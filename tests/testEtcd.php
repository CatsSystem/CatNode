<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/5/3
 * Time: 14:48
 */

use Etcdserverpb\RangeRequest;
use node\etcd\KVClient;

require_once __DIR__ . '/../vendor/autoload.php';


\core\concurrent\Promise::co(function(){
    $client = new KVClient('172.20.111.172:2379', []);
    yield $client->init();
//    $request = new RangeRequest();
//    $request->setKey(0);
//    $request->setRangeEnd(0);
//    list($reply, $status) = yield $client->Range($request)->wait();
//    var_dump($status);
//    if($reply instanceof \Etcdserverpb\RangeResponse)
//    {
//        $message = $reply->getKvs();
//        var_dump($reply->getCount());
//        var_dump($message);
//    }

    $request = new \Etcdserverpb\RangeRequest();
    $request->setKey("Hello");
    list($reply, $status) = yield $client->Range($request)->wait();
    if ($reply instanceof \Etcdserverpb\RangeResponse)
    {
        var_dump($reply->getCount());
        $result = $reply->getKvs();
        var_dump($result->offsetGet(0)->getValue());
    }
});
