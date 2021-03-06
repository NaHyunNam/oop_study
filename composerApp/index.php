<?php
require_once __DIR__.'/vendor/autoload.php'; // __DIR__는 현재 파일(index.php)이 있는 폴더를 가르킨다.

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NativeMailerHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::WARNING));
$log->pushHandler(new NativeMailerHandler(
    'skaskgus0704@naver.com',
    'Emergence!!!!',
    'out@system.com',
    Logger::EMERGENCY));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
$log->emergency('emergency');
?>