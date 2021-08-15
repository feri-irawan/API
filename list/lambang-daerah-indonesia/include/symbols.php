<?php
header("Access-Control-Allow-Origin: https://feriirawan-api.herokuapp.com");
header("Access-Control-Allow-Methods: GET, POST");

if (isset($_GET["data"])) {
  $include = $_GET["data"];
  $index = intval($_GET["index"]);
  $size = $_GET["size"];

  $path = "https://feriirawan-api.herokuapp.com/list/symbols/include/$include";

  $lambang = json_decode(file_get_contents($path));

  // menghapus size default
  foreach ($lambang as $row) {
    $img[] = str_replace("100px", $size."px", $row->img);
  }

  // menampilkan image berdasarkan index provinsi
  for ($i = 0; $i < count($img); $i++) {

    if ($index - 1 == $i) {

      // khusus lambang Kab. Bantaeng
      // karna URL-nya bukan dari wikimedia
      if ($index == 377) {
        $img = str_replace("s100", "s$size", $img[$i]);

      } else {
        $img = "https://upload.wikimedia.org/wikipedia/$img[$i]";
      }


      $ch = curl_init();
      curl_setopt($ch, CURLOPT_USERAGENT, 'CoolTool/0.0 (https://example.org/cool-tool/; cool-tool@example.org) generic-library/0.0');
      curl_setopt($ch, CURLOPT_URL, $img);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $output = curl_exec($ch);
      curl_close($ch);

      $imginfo = getimagesize($img);

      header("Content-Type: {$imginfo['mime']}");
      echo $output;

      break;
    }
  }
}