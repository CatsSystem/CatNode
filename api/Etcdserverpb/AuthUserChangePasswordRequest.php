<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>etcdserverpb.AuthUserChangePasswordRequest</code>
 */
class AuthUserChangePasswordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * name is the name of the user whose password is being changed.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * password is the new password for the user.
     * </pre>
     *
     * <code>string password = 2;</code>
     */
    private $password = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * name is the name of the user whose password is being changed.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * name is the name of the user whose password is being changed.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <pre>
     * password is the new password for the user.
     * </pre>
     *
     * <code>string password = 2;</code>
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * <pre>
     * password is the new password for the user.
     * </pre>
     *
     * <code>string password = 2;</code>
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;
    }

}

