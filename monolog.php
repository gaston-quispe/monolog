<?php
    require __DIR__ . '/vendor/autoload.php';

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $monolog = new Logger('logging');
    $monolog->pushHandler(new StreamHandler(__DIR__ . '/monolog.log', Logger::WARNING));