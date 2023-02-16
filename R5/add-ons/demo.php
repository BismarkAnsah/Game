<?php 
function getWins($data, $drawNum)
{   
    $countWins = 0;
    foreach($data as  $key => $arr)
    {
        if(in_array($drawNum[$key], $arr))
            ++$countWins;
    }
    return $countWins;
}



// echo(
//     getWins([[0,1,2,3,4,5,6,7,8,9,10], [1,2,3,4,5,6,7,8], [1,2,3,4,5,6,7,8]], [0,1,9])
// );