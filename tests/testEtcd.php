<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/5/3
 * Time: 14:48
 */

use etcd\WatchClient;
use Etcdserverpb\PutRequest;
use Etcdserverpb\RangeRequest;
use etcd\KVClient;

require_once __DIR__ . '/../vendor/autoload.php';


\core\concurrent\Promise::co(function(){

    $client = new KVClient('127.0.0.1:2379', []);

    $request = new PutRequest();
    $request->setKey("Hello");
    $request->setValue("test");
    $request->setPrevKv(true);
    $client->Put($request)->wait(function($result){
        list($reply, $status) = $result;
        if($reply instanceof \Etcdserverpb\PutResponse)
        {
            $item = $reply->getPrevKv();
            echo sprintf("update key[%s] success, pre value = %s\n", $item->getKey(), $item->getValue());
        }
    });

    $request = new RangeRequest();
    $request->setKey("Hello");
    $client->Range($request)->wait(function($result){
        list($reply, $status) = $result;
        if($reply instanceof \Etcdserverpb\RangeResponse)
        {
            $list = $reply->getKvs();
            echo sprintf("get %d items \n", $reply->getCount());
            foreach ($list as $item)
            {
                echo sprintf("key[%s] = %s\n", $item->getKey(), $item->getValue());
            }
        }
    });

    $watch_client = new WatchClient('127.0.0.1:2379', []);
    $call = $watch_client->Watch();
    $request = new \Etcdserverpb\WatchRequest();
    $create = new \Etcdserverpb\WatchCreateRequest();
    $create->setKey("Hello");
    $request->setCreateRequest($create);
    $call->waiting(function(\Etcdserverpb\WatchResponse $response, $status){
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
    $call->push($request);
});
