<?php
$content = ob_get_contents();
ob_end_clean();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta name="title" content="FI API - <?= $api_info['title'] ?>" />
  <meta name="description" content="<?= $api_info['description'] ?>" />
  <meta name="keywords" content="<?= $api_info['keywords'] ?>" />
  <meta name="robots" content="index,follow" />

  <meta name="og:title" content="FI API - <?= $api_info['title'] ?>">
  <meta name="og:description" content="<?= $api_info['description'] ?>">
  <meta name="og:image" content="https://<?= $_SERVER['HTTP_HOST'] ?>/docs/thumbnail.png">

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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.6.0/dist/tagify.css" integrity="sha256-vTKdiclUn7qvjU8F6YnG1tyVU8IDSbIVvX4YF04cUqY=" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.6.0/dist/tagify.min.js" integrity="sha256-SKYXlgg1ZtIgXHJdLIU88UUKDdhlYsGjxnlu0uFl3mE=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.6.0/dist/tagify.polyfills.min.js" integrity="sha256-U/DzrPKlydZZHYKvFCPNCOvFyDEh7exSkSCiHptrd40=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.2.0/build/styles/atom-one-light.min.css">
  <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.2.0/build/highlight.min.js"></script>
  <script>
  hljs.highlightAll();
  </script>

  <link rel="stylesheet" href="/docs/layouts/src/style.css">
  <title>FI API - <?= $api_info['title'] ?></title>
</head>
<body>
  <?php include 'partials/header.php' ?>

  <section class="container bg-white p-3">
    <h1 class="text-center mb-5"><span id="apiTitle"></span></h1>
    <div class="row justify-content-center">
      <div class="col-md-8">

        <?= $content ?>

      </div>
    </div>
  </section>

  <?php include 'partials/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
  <script src="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>/src/js/main.js"></script>
  <script src="/docs/layouts/src/darkmode.js"></script>
</body>
</html>