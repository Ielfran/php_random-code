<?php
$fp=fopen("foo","w");
echo get_resource_type($fp)."\n";

$c=curl_init();
echo get_resource_type($c);:
?>
