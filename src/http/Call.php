<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/5/4
 * Time: 14:41
 */

namespace node\http;

use core\concurrent\Promise;

class Call
{
    private $deserialize;

    /**
     * @var Promise
     */
    protected $promise;

    /**
     * Call constructor.
     * @param Promise $promise
     * @param $deserialize
     */
    public function __construct($promise, $deserialize)
    {
        $this->promise = $promise;
        $this->deserialize = $deserialize;
    }

    protected function _serializeMessage($data)
    {
        // Proto3 implementation
        if (method_exists($data, 'encode')) {
            return $data->encode();
        } elseif (method_exists($data, 'serializeToString')) {
            return $data->serializeToString();
        }

        // Protobuf-PHP implementation
        return $data->serialize();
    }

    protected function _deserializeResponse($value)
    {
        if ($value === null) {
            return null;
        }

        // Proto3 implementation
        if (is_array($this->deserialize)) {
            list($className, $deserializeFunc) = $this->deserialize;
            $obj = new $className();
            if (method_exists($obj, $deserializeFunc)) {
                $obj->$deserializeFunc($value);
            } else {
                $obj->mergeFromString($value);
            }
            return $obj;
        }

        // Protobuf-PHP implementation
            return call_user_func($this->deserialize, $value);
    }
}