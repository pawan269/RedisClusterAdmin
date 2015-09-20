<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
$get = $_GET;
$redis = new Redis();
// open line below local redis connection
$redis->connect('127.0.0.1');

// open line below for cluster redis connection 
//$redis = new RedisCluster(NULL, array(
//    '172.16.1.31:6379',
//    '172.16.1.32:6379',
//    '172.16.1.34:6379',
//    '172.16.1.35:6379',
//    '172.16.1.67:6379',
//    '172.16.1.69:6379'));

function getTypeOfKey($type) {

    $typeOfKey = "";
    switch ($type) {

        case Redis::REDIS_STRING :
            $typeOfKey = "string";
            break;
        case Redis::REDIS_SET :
            $typeOfKey = "set";
            break;
        case Redis::REDIS_LIST :
            $typeOfKey = "list";
            break;
        case Redis::REDIS_ZSET :
            $typeOfKey = "sortedset";
            break;
        case Redis::REDIS_HASH :
            $typeOfKey = "hash";
            break;
        case Redis::REDIS_NOT_FOUND :
            $typeOfKey = "undefined";
            break;
    }

    return $typeOfKey;
}

function printValues($ar) {
    echo '<table width="90%" border="1" cellspacing="0" cellpadding="3">';
    echo '<tr><th>Key</th><th>Value</th></tr>';
    foreach ($ar as $k => $v) {
        echo "<tr><td>$k</td><td>$v</td></tr>";
    }
    echo '<table>';
}
