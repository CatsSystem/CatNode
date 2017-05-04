<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/5/3
 * Time: 18:31
 */

namespace node\http;

use core\component\client\Http2;

class BaseStub
{
    private $host;
    private $port;

    private $client;

    public function __construct($hostname, $opts, $channel = null)
    {
        $hostname = explode(":", $hostname);
        $this->host = $hostname[0];
        $this->port = $hostname[1];

        $this->client = new Http2($this->host, false, $this->port);
    }

    public function init()
    {
        return $this->client->init();
    }

    /**
     * Call a remote method that takes a single argument and has a
     * single output.
     *
     * @param string   $method      The name of the method to call
     * @param mixed    $argument    The argument to the method
     * @param callable $deserialize A function that deserializes the response
     * @param array    $metadata    A metadata map to send to the server
     *                              (optional)
     * @param array    $options     An array of options (optional)
     *
     * @return UnaryCall The active call object
     */
    protected function _simpleRequest($method,
                                      $argument,
                                      $deserialize,
                                      array $metadata = [],
                                      array $options = [])
    {
        $msg = $argument->serializeToString();
        $data = pack('CN', 0, strlen($msg)) . $msg;
        $promise = $this->client->post($method, $data);
        $call = new UnaryCall($promise, $deserialize);
        return $call;
    }

    /**
     * Call a remote method that takes a single argument and returns a stream
     * of responses.
     *
     * @param string   $method      The name of the method to call
     * @param mixed    $argument    The argument to the method
     * @param callable $deserialize A function that deserializes the responses
     * @param array    $metadata    A metadata map to send to the server
     *                              (optional)
     * @param array    $options     An array of options (optional)
     *
     * @return ServerStreamingCall The active call object
     */
    protected function _serverStreamRequest($method,
                                            $argument,
                                            $deserialize,
                                            array $metadata = [],
                                            array $options = [])
    {
        $msg = $argument->encode();
        $data = pack('CN', 0, strlen($msg)) . $msg;
        $promise = $this->client->post($method, $data);
        $call = new ServerStreamingCall($promise, $deserialize);
        return $call;
    }

    /**
     * Call a remote method with messages streaming in both directions.
     *
     * @param string   $method      The name of the method to call
     * @param callable $deserialize A function that deserializes the responses
     * @param array    $metadata    A metadata map to send to the server
     *                              (optional)
     * @param array    $options     An array of options (optional)
     *
     * @return BidiStreamingCall The active call object
     */
    protected function _bidiRequest($method,
                                    $deserialize,
                                    array $metadata = [],
                                    array $options = [])
    {
        //$msg = $argument->encode();
        $data = pack('CN', 0, strlen($msg)) . $msg;
        $promise = $this->client->post($method, $data);
        $call = new BidiStreamingCall($promise, $deserialize);
        return $call;
    }
}