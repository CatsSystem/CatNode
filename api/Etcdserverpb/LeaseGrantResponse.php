<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>etcdserverpb.LeaseGrantResponse</code>
 */
class LeaseGrantResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    private $header = null;
    /**
     * <pre>
     * ID is the lease ID for the granted lease.
     * </pre>
     *
     * <code>int64 ID = 2;</code>
     */
    private $ID = 0;
    /**
     * <pre>
     * TTL is the server chosen lease time-to-live in seconds.
     * </pre>
     *
     * <code>int64 TTL = 3;</code>
     */
    private $TTL = 0;
    /**
     * <code>string error = 4;</code>
     */
    private $error = '';

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
     * ID is the lease ID for the granted lease.
     * </pre>
     *
     * <code>int64 ID = 2;</code>
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * <pre>
     * ID is the lease ID for the granted lease.
     * </pre>
     *
     * <code>int64 ID = 2;</code>
     */
    public function setID($var)
    {
        GPBUtil::checkInt64($var);
        $this->ID = $var;
    }

    /**
     * <pre>
     * TTL is the server chosen lease time-to-live in seconds.
     * </pre>
     *
     * <code>int64 TTL = 3;</code>
     */
    public function getTTL()
    {
        return $this->TTL;
    }

    /**
     * <pre>
     * TTL is the server chosen lease time-to-live in seconds.
     * </pre>
     *
     * <code>int64 TTL = 3;</code>
     */
    public function setTTL($var)
    {
        GPBUtil::checkInt64($var);
        $this->TTL = $var;
    }

    /**
     * <code>string error = 4;</code>
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * <code>string error = 4;</code>
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;
    }

}

