<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');

if (isset($_GET["data"])) {
  $include = $_GET["data"];

  if ($include == "province" || $include == "regency") {

    $path = "https://".$_SERVER["HTTP_HOST"]."/list/symbols/include/$include";

    $lambang = json_decode(file_get_contents($path));

    if ($_GET["size"]) {
      $size = $_GET["size"];
    } else {
      $size = 100;
    }

    $i = 0;
    foreach ($lambang as $row) {
      $i++; 
      $img = "https://".$_SERVER["HTTP_HOST"]."/list/symbols/$include/$i/$size";

      $data[] = [
        "index" => $i,
        "title" => $row->title,
        "url" => $img
      ];
    }

    if ($include == "province") {
      $message = "Provinsi";
    } else {
      $message = "Kabupaten";
    }

    $data = [
      "status" => "success",
      "message" => "Daftar Lambang $message di Seluruh Indonesia",
      "author" => "Feri irawan",
      "source" => "Wikipedia",
      "repository" => "https://github.com/feri-irawan/API/tree/main/list/lambang-provinsi-indonesia#readme",
      "lambang" => $data
    ];

    header("Content-Type: application/json");
    $data = json_encode($data);
    echo stripslashes($data);

  }
}
