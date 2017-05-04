<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>etcdserverpb.Compare</code>
 */
class Compare extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * result is logical comparison operation for this comparison.
     * </pre>
     *
     * <code>.etcdserverpb.Compare.CompareResult result = 1;</code>
     */
    private $result = 0;
    /**
     * <pre>
     * target is the key-value field to inspect for the comparison.
     * </pre>
     *
     * <code>.etcdserverpb.Compare.CompareTarget target = 2;</code>
     */
    private $target = 0;
    /**
     * <pre>
     * key is the subject key for the comparison operation.
     * </pre>
     *
     * <code>bytes key = 3;</code>
     */
    private $key = '';
    protected $target_union;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * result is logical comparison operation for this comparison.
     * </pre>
     *
     * <code>.etcdserverpb.Compare.CompareResult result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <pre>
     * result is logical comparison operation for this comparison.
     * </pre>
     *
     * <code>.etcdserverpb.Compare.CompareResult result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Etcdserverpb\Compare_CompareResult::class);
        $this->result = $var;
    }

    /**
     * <pre>
     * target is the key-value field to inspect for the comparison.
     * </pre>
     *
     * <code>.etcdserverpb.Compare.CompareTarget target = 2;</code>
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * <pre>
     * target is the key-value field to inspect for the comparison.
     * </pre>
     *
     * <code>.etcdserverpb.Compare.CompareTarget target = 2;</code>
     */
    public function setTarget($var)
    {
        GPBUtil::checkEnum($var, \Etcdserverpb\Compare_CompareTarget::class);
        $this->target = $var;
    }

    /**
     * <pre>
     * key is the subject key for the comparison operation.
     * </pre>
     *
     * <code>bytes key = 3;</code>
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <pre>
     * key is the subject key for the comparison operation.
     * </pre>
     *
     * <code>bytes key = 3;</code>
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->key = $var;
    }

    /**
     * <pre>
     * version is the version of the given key
     * </pre>
     *
     * <code>int64 version = 4;</code>
     */
    public function getVersion()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * version is the version of the given key
     * </pre>
     *
     * <code>int64 version = 4;</code>
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(4, $var);
    }

    /**
     * <pre>
     * create_revision is the creation revision of the given key
     * </pre>
     *
     * <code>int64 create_revision = 5;</code>
     */
    public function getCreateRevision()
    {
        return $this->readOneof(5);
    }

    /**
     * <pre>
     * create_revision is the creation revision of the given key
     * </pre>
     *
     * <code>int64 create_revision = 5;</code>
     */
    public function setCreateRevision($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(5, $var);
    }

    /**
     * <pre>
     * mod_revision is the last modified revision of the given key.
     * </pre>
     *
     * <code>int64 mod_revision = 6;</code>
     */
    public function getModRevision()
    {
        return $this->readOneof(6);
    }

    /**
     * <pre>
     * mod_revision is the last modified revision of the given key.
     * </pre>
     *
     * <code>int64 mod_revision = 6;</code>
     */
    public function setModRevision($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(6, $var);
    }

    /**
     * <pre>
     * value is the value of the given key, in bytes.
     * </pre>
     *
     * <code>bytes value = 7;</code>
     */
    public function getValue()
    {
        return $this->readOneof(7);
    }

    /**
     * <pre>
     * value is the value of the given key, in bytes.
     * </pre>
     *
     * <code>bytes value = 7;</code>
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(7, $var);
    }

    public function getTargetUnion()
    {
        return $this->whichOneof("target_union");
    }

}

