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
//    $client = new KVClient('127.0.0.1:2379', []);
//    $request = new RangeRequest();
//    $request->setKey("Hello");
//    list($reply, $status) = yield $client->Range($request)->wait();
//    if($reply instanceof \Etcdserverpb\RangeResponse)
//    {
//        $list = $reply->getKvs();
//        var_dump($reply->getCount());
//        foreach ($list as $item)
//        {
//            var_dump($item->getValue());
//        }
//    }
//    var_dump("+++++++++++");
//
//    //$client = new KVClient('127.0.0.1:2379', []);
//    $request = new RangeRequest();
//    $request->setKey("Hello");
//    list($reply, $status) = yield $client->Range($request)->wait();
//    if($reply instanceof \Etcdserverpb\RangeResponse)
//    {
//        $list = $reply->getKvs();
//        var_dump($reply->getCount());
//        foreach ($list as $item)
//        {
//            var_dump($item->getValue());
//        }
//    }


    $watch_client = new \node\etcd\WatchClient('127.0.0.1:2379', []);
    //$watch_client = new \node\etcd\WatchClient('172.20.111.172:2379', []);
    $call = $watch_client->Watch();

    $request = new \Etcdserverpb\WatchRequest();
    $create = new \Etcdserverpb\WatchCreateRequest();
    $create->setKey("Hello");
    $request->setCreateRequest($create);
    $call->setCallback(function(\Etcdserverpb\WatchResponse $response, $status){
        var_dump($response->getWatchId());
        var_dump($response->getCreated());
        foreach ($response->getEvents() as $event)
        {
            $type = $event->getType();
            var_dump($type);
            switch($type)
            {
                case 0:
                {
                    $kv = $event->getKv();
                    var_dump($kv->getValue());
                    break;
                }
                case 1:
                {
                    var_dump("delete");
                    break;
                }
                default:
                {
                    var_dump($response->getEvents());
                }
            }
        }
    });
    $call->write($request);
});
