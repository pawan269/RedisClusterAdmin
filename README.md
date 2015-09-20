# RedisClusterAdmin
A PHP / jQuery Opensource for managing Redis Cluster key-values

1. Prerequist PHP intalled with phpRedis PECL lib, Redis server(s)
2. Copy RedisClusterAdmin folder to web-root folder
3. Edit config.php 
    
    Uncomment line below for local redis connection
    
    $redis->connect('127.0.0.1');

    Uncomment line below for cluster redis connection
    
    //$redis = new RedisCluster(NULL, array(
    //    '172.16.1.31:6379',
    //    '172.16.1.32:6379',
    //    '172.16.1.34:6379',
    //    '172.16.1.35:6379',
    //    '172.16.1.67:6379',
    //    '172.16.1.69:6379'));

4. Open browser and type http://localhost/RedisClusterAdmin
