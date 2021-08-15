<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta name="title" content="Feri Irawan - API" />
  <meta name="description" content="API Documentation List" />
  <meta name="keywords" content="feriirawan api,feri irawan api,rest api,api lambang daerah,api lambang provinsi,api lambang kabupaten,api bmkg, api gempa,api documentation,api lokal,api indonesia" />
  <meta name="robots" content="index,follow" />

  <meta name="og:title" content="Feri Irawan - API" />
  <meta name="og:description" content="API Documentation List" />
  <meta name="og:image" content="https://<?= $_SERVER['HTTP_HOST'] ?>/docs/thumbnail.png" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FC2TE3RHPZ"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-FC2TE3RHPZ');
  </script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/docs/layouts/src/style.css">
  <title>FI API - Documentation</title>
</head>
<body>
  <?php include 'layouts/partials/header.php' ?>

  <section style="min-height: 80vh" class="container bg-white p-3">
    <h1 class="mb-5 text-center"><span class="title"></span></h1>
    <div class="row justify-content-evenly" id="docList"></div>
  </section>

  <?php include 'layouts/partials/footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="/docs/layouts/src/darkmode.js"></script>
  <script>
  Tulis('.title', ['Daftar Dokumentasi API'])

  const docList = [{
      title: 'BMKG',
      description: 'Dokumentasi lengkap untuk penggunaan API BMKG',
      url: 'bmkg',
    },
    {
      title: 'Lambang Daerah Indonesia',
      description: 'Dokumentasi lengkap untuk penggunaan API Lambang Daera Indonesia',
      url: 'lambang-daerah-indonesia',
    },
  ]

  const docListContainer = document.querySelector('#docList')

  docList.forEach((doc) => {
    docListContainer.innerHTML += `
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-body">
                  <h2><a href="list/${doc.url}" class="text-decoration-none">${doc.title}</a></h2>
                  <p>${doc.description}</p>
                </div>
              </div>
          </div>`
  })

  function Tulis(selector, text, loop = false) {
    new Typed(selector, {
      typeSpeed: 70,
      loop,
      strings: text,
    })
  }
  </script>
</body>
</html>