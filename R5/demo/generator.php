<?php 
function generateRandom5()
{
    $result = [];
    for ($i = 0; $i <5; $i++)
        array_push($result, random_int(0, 9));
    return $result;
}


$data = array
(
    "id" => random_int(100, 5000),
    "numbers" => generateRandom5(),
    "betId" => "202302160013",
    "dateTime" => "2023-02-16 00:12:00",
    "timeLeft" => 20
);

echo json_encode($data);