<?php
/**
 * Created by PhpStorm.
 * User: liangchen
 * Date: 2018/12/20
 * Time: 17:56
 */

namespace Tars\report;

class ServerFWrapper
{
    private $_serverF;

    public function __construct(
        $host,
        $port,
        $objName
    ) {
        $this->_serverF = new ServerFSync($host, $port, $objName);
    }

    public function keepAlive(ServerInfo $serverInfo) {
        $this->_serverF->keepAlive($serverInfo);
    }

}