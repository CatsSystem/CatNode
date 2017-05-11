<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/5/4
 * Time: 14:27
 */

namespace node\http;

use core\common\Error;

class UnaryCall extends Call
{

    public function wait()
    {
        return $this->promise->then(function($result){
            var_dump(get_class($result));
            if($result instanceof \swoole_http2_response)
            {
                var_dump($result->body);
                return [$this->_deserializeResponse(substr($result->body, 5)), 200];
            }
            if($result['code'] != Error::SUCCESS)
            {
                return null;
            }
            return [$this->_deserializeResponse(substr($result['data'], 5)), $result['status']];
        });
    }


}