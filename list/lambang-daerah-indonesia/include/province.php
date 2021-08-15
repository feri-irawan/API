<?php
header("Access-Control-Allow-Origin: https://feriirawan-api.herokuapp.com");
header('Access-Control-Allow-Methods: GET, POST');
require "simple_html_dom.php";

$path = "https://id.m.wikipedia.org/wiki/Daftar_lambang_provinsi_di_Indonesia";

for ($size = 80; $size < 200; $size++) {
  $from_size[] = $size."px";
}
$to_size = "100px";

$html = file_get_html($path);

$i = 0;
foreach ($html->find("ul.mw-gallery-traditional li.gallerybox") as $row) {

  $i++;
  $title = str_replace("Lambang ", "", $row->find(".gallerytext a", 0)->title);

  $img = $row->find(".thumb img", 0)->src;
  $img = str_replace("//upload.wikimedia.org/wikipedia/", "", $img);
  $img = str_replace($from_size, $to_size, $img);

  $lambang[] = [
    "index" => $i,
    "title" => $title,
    "img" => $img
  ];

  if ($i == 34) {
    break;
  }
}

header("Content-Type: application/json");
echo stripslashes(json_encode($lambang));