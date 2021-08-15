<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');

$data = [
  "status" => "success",
  "author" => [
    "name" => "Feri Irawan",
    "region" => "Indonesia",
    "github" => "https://github.com/feri-irawan"
  ],
  "message" => "Hai, selamat datang di Kumpulan API by Feri Irawan. Silahkan kunjungi repository berikut untuk info lebih lanjut",
  "repository" => "https://github.com/feri-irawan/API#readme"
];

header("Content-Type: application/json");
$data = json_encode($data, JSON_PRETTY_PRINT);
echo stripslashes($data);