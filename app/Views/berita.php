<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'navbar.php'; ?>

    <div class='container'>
    <h1>Daftar Users</h1>
    <table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Judul</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Gambar</th>
      <th scope="col">Artikel</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($all_berita as $berita) : ?>
    <tr>
      <td>
        <?= $berita->id ?>
      </td>
      <td>
        <?= $berita->Judul ?>
      </td>
      <td>
        <?= $berita->Tanggal ?>
      </td>
      <td>
        <?= $berita->Gambar ?>
      </td>
      <td>
        <?= $berita->artikel ?>
      </td>
      <td>
      <a href="<?= base_url('edit_berita').'/'.$berita->id?>" class="btn btn-info btn-sm"> EDIT </a>
      <a href="<?= base_url('delete_berita').'/'.$berita->id?>" class="btn btn-danger btn-sm"> DELETE </a>

      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<a href="<?= base_url('add_berita')?>" class="btn btn-primary"> Tambah Berita </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>