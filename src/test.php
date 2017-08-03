<?php
$bar = 'BAR';
$key = 'foo' . rand(0,30000);
	apcu_store($key, $bar);
var_dump(apcu_fetch($key));
	var_dump(json_encode(apcu_cache_info(TRUE)));
?>
