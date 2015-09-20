<?php

require_once 'config.php';
if (isset($_GET['v'])) {
    $v = $_GET['v'];
} else {
    exit("error 1");
}

if (isset($_GET['t'])) {
    $t = $_GET['t'];
} else {
    exit("error 2");
}
echo '<h3>' . $v . '</h3>';
switch ($t) {

    case "string" :
        echo $redis->get($v);
        break;

    case "set" :
        echo $redis->get($v);
        break;
    case "list" :
        printValues($redis->lrange($v, 0, -1));
        break;
    case "sortedset" :
        printValues($redis->zrange($v, 0, -1));
        break;
    case "hash" :
        printValues($redis->hgetall($v));
        break;
    case "undefined" :
        $typeOfKey = "undefined";
        break;
}

