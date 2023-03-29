<?php
require_once 'cron.php';

$timerTable = "time1x5";
$insertTables = array (
    "draw_10005"=>"5d","draw_10007"=>"fast_3", "draw_10008"=>"fast_3", "draw_10010"=>"pc_28", "draw_10011"=>"pc_28", "draw_10013"=>"pk_10", "draw_10015"=>"11x5"
);
$defaultInterval = 90; //seconds
$cron = new Cron($timerTable, $insertTables, $defaultInterval);
$cron->startCron();