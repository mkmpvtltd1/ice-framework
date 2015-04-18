<?php
if(php_sapi_name() != 'cli'){
	exit();
}
ini_set('error_log','/var/log/nginx/aquiteam.log');
$opts = getopt('f:p:');
$file = $opts['f'];
$basePath = $opts['p'];

include (dirname(__FILE__)."/../classes/CronUtils.php");

$cronUtils = CronUtils::getInstance($basePath, dirname(__FILE__)."/".$file);

echo "Cron Runner created \r\n";

$cronUtils->run();

