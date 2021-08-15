<?php
ob_start();
$api_info = [
  "title" => "BMKG",
  "description" => "Dokumentasi API BMKG - Data Gempa Terbaru BMKG",
  "keywords" => 'bmkg api,bmkg gempa,bmkg cuaca,api,api bmkg,info gempa terkini,data gempa bmkg,restfull api,rest api bmkg,indonesia api',
];
?>
<p>
  Selamat datang di BMKG API. <br />
  API ini berisi infomasi gempa terkini di Indonesia dalam bentuk data JSON.
</p>
<p>Berikut adalah panduan untuk menggukannya:</p>
<h2>Mulai Cepat</h2>
<p>
  Mulai cepat dengan melakukan request berikut seperti berikut
</p>
<p>
<pre><code class="language-plaintext">http://feriirawan-api.herokuapp.com/list/bmkg/</code></pre>
</p>

<h5>Respon</h5>
<p>
<pre><code class="language-json"><?php echo '{
  "code": 200,
  "status": "success",
  "message": "Data gempa terkini",
  "author": "Feri irawan",
  "source": "BMKG",
  "gempa": [
      {
          "waktu_gempa": "04-06-21 20:45:15 WIB",
          "lintang": "0.38",
          "bujur": "126.28",
          "magnitudo": "5.4",
          "kedalaman": "10 Km",
          "wilayah": "128 km BaratDaya TERNATE-MALUT"
      },
      {
          "waktu_gempa": "03-06-21 17:09:58 WIB",
          "lintang": "0.35",
          "bujur": "126.22",
          "magnitudo": "6.1",
          "kedalaman": "10 Km",
          "wilayah": "135 km BaratDaya TERNATE-MALUT"
      }
  ]
}
'?></code></pre>
</p>
<h5>Info</h5>
<p>
  Objek pertama (index 0) yang ada di dalam <code>gempa</code> adalah data gempa yang terakhir terjadi. Kemudian objek kedua (index 1) dan seterusnya adalah data gempa yang terjadi sebelumnnya
</p>

<h2>Contoh Penggunaan</h2>
<p>
<h5>PHP</h5>
<pre><code class="language-php"><?php echo '// Get data
$data = file_get_contents("http://feriirawan-api.herokuapp.com/list/bmkg/");
$data = json_decode($data);

var_dump($data)'?></code></pre>
</p>

<?php require_once "../../layouts/main.php" ?>