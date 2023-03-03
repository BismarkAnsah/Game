<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$url = "http://localhost/dashboard/server/howto.json";

echo json_encode(json_decode(file_get_contents($url)));

