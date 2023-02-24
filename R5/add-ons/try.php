<?php
date_default_timezone_set("europe/London");
function getSecondsElapsed($time, $start="today") {
  $dateTime = DateTime::createFromFormat("H:i:s", $time);
  $timeElapsed = $dateTime->getTimestamp() - strtotime($start);
  return $timeElapsed;
}

// echo getSecondsElapsed("04:59:00", "06:00:00");

function nextDrawTime($time, $interval,  $gapBegin=false, $gapEnd=false, $start="00:00:00", $end = "24:00:00", ) 
{
  if(($gapBegin AND $gapEnd) AND $time >= $gapBegin AND $time < $gapEnd)
  {
    return date("Y-m-d").' '.$gapEnd;
  }
  if($time >  $end)
  {
    $nextDay = strtotime("+$interval seconds", strtotime($end));
    return date("Y-m-d", $nextDay).' '.$start;
  }
  $timeElapsed = getSecondsElapsed($time, $start);
  $surplusSeconds = $timeElapsed%$interval;
  $nextDrawInSecs = $timeElapsed - $surplusSeconds + $interval;
  $nextDrawTimestamp = $nextDrawInSecs + strtotime($start);
  return date("Y-m-d H:i:s", $nextDrawTimestamp);
}

// echo  $nextTime =  nextDrawTime("00:00:00", 60, "05:00:00", "06:00:00");die;
$i = 0;
for($time="00:00:01"; $time!="00:00:00";)
{
  
   $nextTime =  nextDrawTime($time, 60, "04:59:00", "06:00:00");
   echo ++$i." ".$nextTime."<br/>";
   $time = date("H:i:s", strtotime($nextTime));
}

echo nextDrawTime("20:00:00", 90, "05:00:00", "06:00:00");
 function getDifferenceInSecs($time1, $time2 = true)
{
    $start = new DateTime($time1);
    $end = $time2 === true ? new DateTime() : new DateTime($time2);
    $diff = $start->diff($end);
    $diffInSecs = $diff->d * 24 * 60 * 60 + $diff->h * 60 * 60 + $diff->i * 60 + $diff->s;
    return $diffInSecs;
}

// echo getDifferenceInSecs("2022-12-12 00:00:00", "2022-12-11 23:59:00" );
// function Game(gameId, totalBets, multiplier)
// {
//  this.gameId = gameId;
//  this.totalBets = totalBets;
//  this.multiplier = multiplier;
// }

// game.prototype.getMultiplier()
// {
//   return this.multiplier;
// }
// game.prototype.getTotalBets()
// {
//   return this.totalBets;
// }

// let all5 = new Game();
// all5.getMultiplier();