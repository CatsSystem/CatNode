<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/5/5
 * Time: 11:38
 */

require_once __DIR__ . '/../vendor/autoload.php';

$response = new \Etcdserverpb\WatchResponse();
$data = file_get_contents(__DIR__ . '/test.bin');
var_dump(strlen($data));
$response->mergeFromString(substr($data, 9 + 5));

var_dump($response->getWatchId());
foreach ($response->getEvents() as $item)
{
    var_dump($item->getKv()->getValue());
}


$response1 = new \Etcdserverpb\WatchResponse();
$data = file_get_contents(__DIR__ . '/test1.bin');
var_dump(strlen($data));
$data = substr($data, 14);
//$data = substr($data, 5);
$response1->mergeFromString($data);

var_dump($response1->getWatchId());
foreach ($response1->getEvents() as $item)
{
    var_dump($item->getKv()->getValue());
}