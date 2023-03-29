<?php
require_once 'cron.php';

$timerTable = "time1x0";
$insertTables = array (
    "draw_10001"=>"5d", "draw_10003"=>"5d", "draw_10018"=>"5d"
);
$defaultInterval = 60; //seconds
$cron = new Cron($timerTable, $insertTables, $defaultInterval);
$cron->startCron();
