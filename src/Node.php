<?php
/*******************************************************************************
 *  This file is part of CatNode.
 *
 *  CatNode is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  CatNode is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 *******************************************************************************
 * Author: Lidanyang  <simonarthur2012@gmail.com>
 ******************************************************************************/


namespace node;
use core\component\config\Config;
use Hprose\Swoole\Client;

/**
 * 节点API
 * Class Node
 * @package node
 */
class Node
{
    /**
     * @var Client
     */
    private $rpc_client;

    public function __construct()
    {
        $config = Config::get('node');
        $this->rpc_client = new Client($config['uris']);
    }

    public function online($name, $socket_type, $server_ip, $port)
    {
        return $this->rpc_client->online($name, $socket_type, $server_ip, $port);
    }

    public function ping($id, $url)
    {
        return $this->rpc_client->setPing($id, $url);
    }

    public function loadConfig($id)
    {

    }
}