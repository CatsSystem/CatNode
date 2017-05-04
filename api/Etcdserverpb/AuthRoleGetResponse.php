<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>etcdserverpb.AuthRoleGetResponse</code>
 */
class AuthRoleGetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.etcdserverpb.ResponseHeader header = 1;</code>
     */
    private $header = null;
    /**
     * <code>repeated .authpb.Permission perm = 2;</code>
     */
    private $perm;

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
     * <code>repeated .authpb.Permission perm = 2;</code>
     */
    public function getPerm()
    {
        return $this->perm;
    }

    /**
     * <code>repeated .authpb.Permission perm = 2;</code>
     */
    public function setPerm(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Authpb\Permission::class);
        $this->perm = $arr;
    }

}

