<?php

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
