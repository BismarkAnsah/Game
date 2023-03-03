<?php

require_once "conn.php";
/**
 * Returns the true end time of a time range, given a step size.
 *
 * @param string $start The start time of the range, in "HH:MM:SS" format.
 * @param string $end The end time of the range, in "HH:MM:SS" format.
 * @param int $step The step size, in seconds.
 * @return int The true end time of the range, rounded up to the nearest multiple of the step size.
 */
function getTrueEndTime($start, $end, $step) {
    $interval = getSecondsElapsed($end) - getSecondsElapsed($start);
    $trueEnd = (intdiv($interval, $step) * $step) + getSecondsElapsed($start);
    return $trueEnd;
}

/**
 * Generates an array of draw times for a given time range and step size.
 *
 * @param string $start The start time of the range, in "HH:MM:SS" format.
 * @param string $end The end time of the range, in "HH:MM:SS" format.
 * @param int $step The step size, in seconds.
 * @param int $startId The starting ID for the draw times array.
 * @return array An associative array of draw times, where the keys are IDs and the values are "HH:MM:SS" strings.
 */
function generateDrawTimes($start, $end, $step, $startId = 1) {
    $startToSec = getSecondsElapsed($start);
    $trueEnd = getTrueEndTime($start, $end, $step);
    $drawTimes = array();

    for ($timeElapsed = $startToSec; $timeElapsed <= $trueEnd; $timeElapsed += $step) {
        $drawTimes[$startId] = formatTimeElapsed($timeElapsed);
        $startId++;
    }

    return $drawTimes;
}

/**
 * Converts a time in "HH:MM:SS" format to the number of seconds elapsed since midnight.
 *
 * @param string $time The time to convert, in "HH:MM:SS" format.
 * @return int The number of seconds elapsed since midnight.
 */
function getSecondsElapsed($time) {
    $dateTime = DateTime::createFromFormat("H:i:s", $time);
    $timeElapsed = $dateTime->getTimestamp() - strtotime("today");
    return $timeElapsed;
}

/**
 * Formats a time elapsed in seconds as a "HH:MM:SS" string.
 *
 * @param int $timeElapsed The time elapsed to format, in seconds.
 * @return string The time elapsed as a "HH:MM:SS" string.
 */
function formatTimeElapsed($timeElapsed) {
    $dateTime = new DateTime();
    $dateTime->setTimestamp($timeElapsed + strtotime("today"));
    return $dateTime->format("H:i:s");
}

// echo $time = getSecondsElapsed('12:00:59');
// echo "<br/>";
// echo gmdate("H:i:s", $time);


$data = generateDrawTimes('18:00:00', '24:00:00', 60, 1021);
$result = array_search(array_pop($data), $data);
echo "<table>
<tr>
    <th>ID</th>
    <th>Drawn Time</th>
    </tr>";
    $SQL = "INSERT INTO royal_5_draws(draw_id, draw_time) VALUES(?,?)";
    $conn = new Database();
//     foreach($data as $key => $value)
//     {
//         // $conn->query($SQL, [$key, $value]);
//         echo"
   
//         <tr>
//             <td style='text-align:center;'>{$key}</td>
//             <td style='text-align:center;'>{$value}</td>
//             </tr>";
//     }
// echo "</table>";

//  function getSecondsUntilNextDraw()
// {
//     $start = new DateTime("09:24:00");
//     $end = new DateTime();
//     $diff = $start->diff($end);
//     $diffInSecs = $diff->h * 60 + $diff->s;
//     return $diffInSecs;
// }

