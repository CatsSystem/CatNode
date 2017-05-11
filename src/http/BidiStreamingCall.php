<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/5/4
 * Time: 14:43
 */

namespace node\http;

class BidiStreamingCall extends Call
{

    protected $client;

    protected $stream_id;

    protected $callback;

    public function __construct(Http2 &$client, $deserialize)
    {
        parent::__construct(null, $deserialize);
        $this->client = $client;
    }

    public function onReceive($response)
    {
        var_dump("recv");
        if($response->body){
            $data = substr($response->body, 5);
//            if(strlen($data) == 57)
//            {
//                $data = substr($data, 2);
//            }
            call_user_func($this->callback, $this->_deserializeResponse($data), $response->statusCode);
        }
    }

    public function write($argument)
    {
        $msg = $this->_serializeMessage($argument);
        $data = pack('CN', 0, strlen($msg)) . $msg;
        $this->client->push($this->stream_id, $data);
    }

    /**
     * @param mixed $stream_id
     */
    public function setStreamId($stream_id)
    {
        var_dump($stream_id);
        $this->stream_id = $stream_id;
    }

    /**
     * @param mixed $callback
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
    }
}
