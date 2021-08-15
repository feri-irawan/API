<?php
require "../../src/simple_html_dom.php";

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');

$html = file_get_html('https://www.bmkg.go.id/gempabumi/gempabumi-terkini.bmkg');

foreach ($html->find("table.table-striped tbody tr") as $row) {

  $waktu = $row->find("td", 1)->plaintext;
  $lintang = $row->find("td", 2)->plaintext;
  $bujur = $row->find("td", 3)->plaintext;
  $magnitudo = $row->find("td", 4)->plaintext;
  $kedalaman = $row->find("td", 5)->plaintext;
  $wilayah = $row->find("td", 6)->plaintext;

  $gempa[] = [
    "waktu_gempa" => preg_replace("/\r|\n/", "", $waktu),
    "lintang" => $lintang,
    "bujur" => $bujur,
    "magnitudo" => $magnitudo,
    "kedalaman" => $kedalaman,
    "wilayah" => $wilayah
  ];
}

$data = [
  "code" => 200,
  "status" => "success",
  "message" => "Data gempa terkini",
  "author" => "Feri irawan",
  "source" => "BMKG",
  "gempa" => $gempa
];

header("Content-Type: application/json");
echo json_encode($data);
