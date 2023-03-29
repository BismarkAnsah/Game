<?php
require_once 'cron.php';

$timerTable = "time3x0";
$insertTables = array (
    "draw_10004"=>"5d", "draw_10006"=>"fast_3","draw_10009"=>"pc_28", "draw_10014"=>"pk_10", "draw_10016"=>"11x5"
);
$defaultInterval = 180; //seconds
$cron = new Cron($timerTable, $insertTables, $defaultInterval);
$cron->startCron();
