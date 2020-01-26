Components for keepalive reporting



1. Component description

` ` ` `

When the master process is started, the tarsphp framework will report the service survival status (main process survival & management process survival).

When the first worker process is started, a timer will be opened to regularly report the survival status.

` ` ` `



2. Document description:
```
	├── composer.json
	├── src
	│ ├── NodeF.tars //protocol file
	│ ├── ServerFAsync.php // Asynchronous reporting
	│ ├── ServerFSync.php // synchronous reporting
	│ └── ServerInfo.php  //ServerInfo
```

3、Use instance (if service is PHPTest.test.obj)：
```
        $serverInfo = new ServerInfo();
        $serverInfo->adapter = 'PHPTest.test.objAdapter';
        $serverInfo->application = 'PHPTest';
        $serverInfo->serverName = 'test';
        $serverInfo->pid = $masterPid;

        $serverF = new ServerFSync($host, $port, $objName);
        $serverF->keepAlive($serverInfo); //Main process survives

        $adminServerInfo = new ServerInfo();
        $adminServerInfo->adapter = 'AdminAdapter';
        $adminServerInfo->application = 'PHPTest';
        $adminServerInfo->serverName = 'test';
        $adminServerInfo->pid = $masterPid;
        $serverF->keepAlive($adminServerInfo);//Manage process survival
```
