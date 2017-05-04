<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>etcdserverpb.HashResponse</code>
 */
class HashResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    private $header = null;
    /**
     * <pre>
     * hash is the hash value computed from the responding member's key-value store.
     * </pre>
     *
     * <code>uint32 hash = 2;</code>
     */
    private $hash = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    public function setHeader(&$var)
    {
        GPBUtil::checkMessage($var, \Etcdserverpb\ResponseHeader::class);
        $this->header = $var;
    }

    /**
     * <pre>
     * hash is the hash value computed from the responding member's key-value store.
     * </pre>
     *
     * <code>uint32 hash = 2;</code>
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * <pre>
     * hash is the hash value computed from the responding member's key-value store.
     * </pre>
     *
     * <code>uint32 hash = 2;</code>
     */
    public function setHash($var)
    {
        GPBUtil::checkUint32($var);
        $this->hash = $var;
    }

}
