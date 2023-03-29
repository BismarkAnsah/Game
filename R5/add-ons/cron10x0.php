<?php
require_once 'cron.php';

$timerTable = "time10x0";
$insertTables = array();
$defaultInterval = 600; //seconds
$cron = new Cron($timerTable, $insertTables, $defaultInterval);
$cron->startCron();
