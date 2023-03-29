<?php

require_once 'cron.php';

$timerTable = "time5x0";
$insertTables = array(
    "draw_10002" => "5d",  "draw_10012" => "3d",  "draw_10017" => "49x7"
);
$defaultInterval = 300; //seconds
$cron = new Cron($timerTable, $insertTables, $defaultInterval);
$cron->startCron();
