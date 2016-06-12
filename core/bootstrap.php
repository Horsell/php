<?php
require_once __DIR__ . '/config.inc.php';
require_once __DIR__ . '/../vendor/autoload.php';

use RedBean_Facade as R;

if(empty(R::$currentDB))
{
    $dsn = sprintf('%s:host=%s; dbname=%s, DB_TYPE, DB_NAME');
    R::setup($dsn, DB_USER, DB_PASSWORD);
}

R::close();