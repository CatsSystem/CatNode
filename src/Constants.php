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

class Constants
{
    const SOCKET_TYPE_TCP       = 1;
    const SOCKET_TYPE_UDP       = 2;
    const SOCKET_TYPE_HTTP      = 3;

    const PROTOCOL_TYPE_HPROSE  = 1;
    const PROTOCOL_TYPE_THRIFT  = 2;
    const PROTOCOL_TYPE_HTTP    = 3;
    const PROTOCOL_TYPE_GRPC    = 4;

}