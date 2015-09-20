<?php
require_once 'config.php';
?>
<h3>Sever Info</h3>
<table width="80%" border="0" cellspacing="0" cellpadding="3">
    <?php
    $ar = $redis->info("COMMANDSTATS");
    $i = 0;
    foreach ($ar as $k => $v) {
        echo "<tr ";
        if ($i % 2 === 0)
            echo 'style="background: #DBDBDB;"';
        echo "><td>$k</td><td>$v</td></tr>";
        $i++;
    }
    ?>
</table>                
