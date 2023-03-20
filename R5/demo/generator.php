<?php
// function generateRandom5()
// {
//     $result = [];
//     for ($i = 0; $i < 5; $i++)
//         array_push($result, random_int(0, 9));
//     return $result;
// }

// $randoms = implode(",", generateRandom5());

// $data = array(
//     "id" => random_int(100, 5000),
//     "numbers" => generateRandom5(),
//     "betId" => "202302160013",
//     "dateTime" => "2023-02-16 00:12:00",
//     "timeLeft" => 20
// );
// $data2 = '{"0":{"id":"5674","draw_count":"1372","draw_date":"202303021372","draw_number":"7,6,7,1,6","draw_time":"2023-03-02 23:51:00","draw_datetime":"2023-03-02 23:50:59"},"1":{"id":"5675","draw_count":"1373","draw_date":"202303021373","draw_number":"8,9,2,2,7","draw_time":"2023-03-02 23:52:00","draw_datetime":"2023-03-02 23:51:59"},"2":{"id":"5676","draw_count":"1374","draw_date":"202303021374","draw_number":"9,3,7,6,1","draw_time":"2023-03-02 23:53:00","draw_datetime":"2023-03-02 23:52:59"},"3":{"id":"5677","draw_count":"1375","draw_date":"202303021375","draw_number":"5,5,2,6,9","draw_time":"2023-03-02 23:54:00","draw_datetime":"2023-03-02 23:53:59"},"4":{"id":"5678","draw_count":"1376","draw_date":"202303021376","draw_number":"6,0,6,2,8","draw_time":"2023-03-02 23:55:00","draw_datetime":"2023-03-02 23:54:59"},"5":{"id":"5679","draw_count":"1377","draw_date":"202303021377","draw_number":"7,3,9,7,7","draw_time":"2023-03-02 23:56:00","draw_datetime":"2023-03-02 23:55:59"},"6":{"id":"5680","draw_count":"1378","draw_date":"202303021378","draw_number":"9,1,6,3,0","draw_time":"2023-03-02 23:57:00","draw_datetime":"2023-03-02 23:56:59"},"7":{"id":"5681","draw_count":"1379","draw_date":"202303021379","draw_number":"5,3,0,9,1","draw_time":"2023-03-02 23:58:00","draw_datetime":"2023-03-02 23:57:59"},"8":{"id":"5682","draw_count":"1380","draw_date":"202303021380","draw_number":"1,0,8,7,6","draw_time":"2023-03-02 23:59:00","draw_datetime":"2023-03-02 23:58:59"},"9":{"id":"' . random_int(100, 5000) . '","draw_count":"1","draw_date":"202303020001","draw_number":"' . $randoms . '","draw_time":"2023-03-03 00:00:00","draw_datetime":"2023-03-02 23:59:59"},"timeLeft":' . (60 - date("s")) . '}';
// echo $data2;
$str = bcdiv(89.97852056230523611111477777777777777775211448584199, 1, 4);
echo $str;
die;
// $explodedStr = explode(".",$str);
// $truncated = $explodedStr[1];
// $truncated = substr($truncated, 0, 4);
// $final = floatval($explodedStr[0].'.'.$truncated);
echo $final;