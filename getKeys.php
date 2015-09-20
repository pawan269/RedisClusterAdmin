<?php
require_once 'config.php';
if (!isset($_GET['k'])) {
    $regx = "*";
} else {
    $regx = $_GET['k'];
}


$keys = $redis->keys("*" . $regx . "*");

$main_array = array();
asort($keys);
foreach ($keys as $k => $v) {
    ?>
    <a class="keynames" href="#" onclick="javascript:getValues('<?php echo $v; ?>', '<?php echo getTypeOfKey($redis->type($v)); ?>');
                return false;"><?php echo $v; ?></a><br />
    <?php
}
if (empty($keys)) {
    echo 'No result found!';
}
