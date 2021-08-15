<?php
ob_start();
$api_info = [
  'title' => 'Lambang Daerah Indonesia',
  'description' => 'Dokumentasi API Lambang Daerah Indonesia (Provinsi dan Kabupaten) seluruh Indonesia',
  'keywords' => 'api,fi api docs,lambang,symbol,lambang daerah indonesia,api lambang provinsi,lambang provinsi,province,lambang propinsi,lambang kabupaten,regency,indonesia,cari lambang daerah',
];
?>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-provice-tab" data-bs-toggle="tab" data-bs-target="#nav-province" type="button">Provinsi</button>
    <button class="nav-link" id="nav-regency-tab" data-bs-toggle="tab" data-bs-target="#nav-regency" type="button">Kabupaten</button>
    <button class="nav-link" id="nav-docs-tab" data-bs-toggle="tab" data-bs-target="#nav-docs" type="button">Dokumentasi</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!-- Province -->
  <div class="tab-pane fade show active p-3" id="nav-province">
    <div class="row mb-3">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <a href="#" id="province-link" target="_self">
          <img id="province-symbol" src="src/img/default.png" class="bg-light mb-3 rounded img-thumbnail" />
        </a>
      </div>
      <div class="input-group">
        <input readonly class="form-control" type="text" id="province-link-input" value="" placeholder="https://" />
        <button class="btn btn-copy btn-outline-secondary" data-clipboard-target="#province-link-input" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
          </svg>
        </button>
      </div>
    </div>

    <div id="form-province">
      <form action="" method="get" accept-charset="utf-8">
        <div class="row">
          <div class="col-7 mb-3">
            <label for="province">Provinsi</label>
            <input name="province" id="province" class="form-control" placeholder="-- Pilih Provinsi --" required />
          </div>
          <div class="col-5">
            <label for="province-size">Ukuran</label>
            <input class="form-control" type="number" name="province-size" id="province-size" value="200" required />
          </div>

          <div class="col-12 text-end">
            <button class="btn btn-primary" type="submit">Dapatkan Lambang</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Regency -->
  <div class="tab-pane fade p-3" id="nav-regency">
    <div class="row mb-3">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <a href="#" id="regency-link" target="_self">
          <img id="regency-symbol" src="src/img/default.png" class="bg-light mb-3 rounded img-thumbnail" />
        </a>
      </div>
      <div class="input-group">
        <input readonly class="form-control" type="text" id="regency-link-input" value="" placeholder="https://" />
        <button class="btn btn-copy btn-outline-secondary" data-clipboard-target="#regency-link-input" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
          </svg>
        </button>
      </div>
    </div>

    <div id="form-regency">
      <form action="" method="get" accept-charset="utf-8">
        <div class="row">
          <div class="col-7 mb-3">
            <label for="regency">Kabupaten</label>
            <input name="regency" id="regency" class="form-control" placeholder="-- Pilih Kabupaten --" required />
          </div>
          <div class="col-5">
            <label for="regency-size">Ukuran</label>
            <input class="form-control" type="number" name="regency-size" id="regency-size" value="200" required />
          </div>

          <div class="col-12 text-end">
            <button class="btn btn-primary" type="submit">Dapatkan Lambang</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="tab-pane fade p-3" id="nav-docs">
    <!-- Dokumentasi -->
    <div class="pt-3">
      <h2 id="docs-provinsi">Provinsi</h2>

      <p>
        Berikut cara mendapatkan data lambang provinsi seluruh Indonesia
      <h6>Endpoint</h6>
      <pre><code class="language-plaintext">https://feriirawan-api.herokuapp.com/list/symbols/province/200</code></pre>
      </p>
      <p>
      <h6>Keterangan</h6>
      <ul>
        <li>
          Angka 200 setelah <code>province</code> adalah ukuran semua lambang dalam satuan pixel.</p>
        </li>
      </ul>
      </p>
      <p>
      <h6>Respon</h6>
      <pre><code class="language-json"><?php echo '{
    "status": "success",
    "message": "Daftar Lambang Provinsi di Seluruh Indonesia",
    "author": "Feri irawan",
    "source": "Wikipedia",
    "repository": "https://github.com/feri-irawan/API/tree/main/list/lambang-provinsi-indonesia#readme",
    "lambang": [
        {
            "index": 1,
            "title": "Nanggru00f6e Aceh Darussalam",
            "url": "https://feriirawan-api.herokuapp.com/list/symbols/province/1/200"
                                                                               ^ ^^^
        },
        {
            "index": 2,
            "title": "Sumatera Utara",
            "url": "https://feriirawan-api.herokuapp.com/list/symbols/province/2/200"
                                                                               ^ ^^^    
        }
    ]
}' ?></code></pre>
      </p>

      <p>
      <h6>Keterangan</h6>
      <ul>
        <li>
          Angka pertama setelah <code>province</code> adalah index provinsi (1 sampai 34)
        </li>
        <li>
          Angka <code>200</code> setelah index provinsi adalah ukuran lambang dalam satuan pixel.
        </li>
      </ul>
      </p>
    </div>
    <!-- Akhir dokumentasi -->
    <hr>
    <!-- Dokumentasi -->
    <div class="pt-3">
      <h2 id="docs-kabupaten">Kabupaten</h2>

      <p>
        Berikut cara mendapatkan data lambang dari 514 kabupaten seluruh Indonesia
      <h6>Endpoint</h6>
      <pre><code class="language-plaintext">https://feriirawan-api.herokuapp.com/list/symbols/regency/200</code></pre>
      </p>
      <p>
      <h6>Keterangan</h6>
      <ul>
        <li>
          Angka 200 setelah <code>regency</code> adalah ukuran semua lambang dalam satuan pixel.</p>
        </li>
      </ul>
      </p>
      <p>
      <h6>Respon</h6>
      <pre><code class="language-json"><?php echo '{
    "status": "success",
    "message": "Daftar Lambang Kabupaten di Seluruh Indonesia",
    "author": "Feri irawan",
    "source": "Wikipedia",
    "repository": "https://github.com/feri-irawan/API/tree/main/list/lambang-provinsi-indonesia#readme",
    "lambang": [
        {
            "index": 1,
            "title": "Kabupaten Aceh Barat",
            "url": "https://feriirawan-api.herokuapp.com/list/symbols/regency/1/200"
                                                                              ^ ^^^
        },
        {
            "index": 2,
            "title": "Kabupaten Aceh Barat Daya",
            "url": "https://feriirawan-api.herokuapp.com/list/symbols/regency/2/200"
                                                                              ^ ^^^
        }
    ]
}
' ?></code></pre>
      </p>

      <p>
      <h6>Keterangan</h6>
      <ul>
        <li>
          Angka pertama setelah <code>regency</code> adalah index kabupaten (1 sampai 514)
        </li>
        <li>
          Angka <code>200</code> setelah index kabupaten adalah ukuran lambang dalam satuan pixel.
        </li>
      </ul>
      </p>
    </div>
    <!-- Akhir dokumentasi -->
  </div>
</div>
<?php require_once '../../layouts/main.php' ?>