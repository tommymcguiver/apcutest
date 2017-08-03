<?php
$key = 'foo' . rand(0,1000);;

$iterator = new APCUIterator('/[a-b]*' . $key .'.*/', APC_ITER_KEY);
foreach ($iterator as $item) {
	apcu_delete($item['key']);
}
?>
