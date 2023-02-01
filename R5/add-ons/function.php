<?php

function getTrueEndTime($start , $end, $step)
{
    $interval = intval($end) - intval($start);
    $trueEnd = intdiv($interval, $step)*$step+$start;
    return $trueEnd;
}

function generateDrawTimes($start, $end, $generateAfter, $startId = 1)
{
    $startToSec = intval(getTimeElapsed($start));
    $endToSec = intval(getTimeElapsed($end));
    $trueEnd = getTrueEndTime($startToSec, $endToSec, $generateAfter);
    $drawTimes = array();
    for($startToSec; $startToSec <= $trueEnd; $startToSec+=$generateAfter)
    {
        $drawTimes[$startId] = gmdate("H:i:s", $startToSec);
        ++$startId;
    }
    return $drawTimes;
}

function getTimeElapsed($time)
{
    $splittedTime = explode(":", $time);
    $hour = intval($splittedTime[0]);
    $minute = intval($splittedTime[1]);
    $second = intval($splittedTime[2]);
    $timeElapsed = $hour * 3600 + $minute * 60 + $second;
    return $timeElapsed;
}

// echo $time = getTimeElapsed('12:00:59');
// echo "<br/>";
// echo gmdate("H:i:s", $time);


$data = generateDrawTimes('00:00:00', '24:00:00', 60);
$result = array_search(array_pop($data), $data);
echo "<table>
<tr>
    <th>ID</th>
    <th>Drawn Time</th>
    </tr>";
foreach($data as $key => $value)
{
    echo"
   
        <tr>
            <td style='text-align:center;'>{$key}</td>
            <td style='text-align:center;'>{$value}</td>
            </tr>";
}
echo "</table>";