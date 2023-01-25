<?php

function getTime($start , $end, $generateMin)
{
    $interval = $end - $start;
    $trueEnd = intdiv($interval, $generateMin)*$generateMin;
return $trueEnd;
}

print_r(getTime(100, 600, 90));