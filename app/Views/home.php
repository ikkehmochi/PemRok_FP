<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php include 'navbar.php'; ?>
    <div class='container'>
    <h1>Selamat Datang di Toko Medis Kelompok 1</h1>
    </div>

    <?php foreach($all_berita as $berita) : ?>

    <table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      <th scope="col"><?= $berita->Judul?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <?= $berita->Tanggal ?>
      </td>
    </tr>
    <?php if ($berita->Gambar != null) { ?>
    <tr>
        <td>
            <img src="<?php echo $berita->Gambar; ?>">
        </td>
    </tr>
<?php } ?>
    <tr>
      <td>
        <?= $berita->artikel ?>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
  </body>
</html>