<?php
header("Access-Control-Allow-Origin: https://feriirawan-api.herokuapp.com");
header('Access-Control-Allow-Methods: GET, POST');
require "simple_html_dom.php";

$path = "https://id.m.wikipedia.org/wiki/Daftar_lambang_kabupaten_dan_kota_di_Indonesia";
$html = file_get_html($path);

// mengubah ukuran default gambar menjadi 100px
for ($size = 80; $size < 200; $size++) {
  $from_size[] = $size."px";
}
$to_size = "100px";

$i = 0;
foreach ($html->find("ul.gallery.mw-gallery-traditional li.gallerybox") as $row) {

  $i++;
  $title = $row->find(".gallerytext a", 0)->plaintext;

  $img = $row->find(".thumb img", 0)->src;
  $img = str_replace("//upload.wikimedia.org/wikipedia/", "", $img);
  $img = str_replace($from_size, $to_size, $img);

  // khusus lambang Kab. Bantaeng
  // Karna ukurannya tidak bisa berubah maka ambil dari URL lain
  if ($i == 377) {
    $img = "https://1.bp.blogspot.com/-zrybWtRFsFU/UOb-tG2xqOI/AAAAAAAAKEs/2OC2hzFKncA/s100/LOGO+KABUPATEN+BANTAENG.png";
  }

  $lambang[] = [
    "index" => $i,
    "title" => $title,
    "img" => $img
  ];

  if ($i == 514) {
    break;
  }
}


/*
  Jika Dipisah Berdasarkan provinsi
  function symbolsRegency($regency, $start, $finish) {
    global $lambang;

    $symbols = [];
    for ($i = ($start - 1); $i < count($lambang); $i++) {
      $symbols[] = $lambang[$i];
      if ($i == $finish) {
        return [
          "province" => $regency,
          "symbolsRegency" => $symbols
        ];
        break;
      }
    }
  }

  $data[] = symbolsRegency("Aceh", 1, 23);
*/

header("Content-Type: application/json");
echo stripslashes(json_encode($lambang));