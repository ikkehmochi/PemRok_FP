<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'navbar.php'; ?>

    <div class='container'>
    <h1>Edit Berita</h1>
    <form action="<?= base_url('proses_edit_berita')?>"method="POST"  >
    <input type="hidden" class="form-control" id="id" name="id" value="<?= $data_berita->id?>">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
  <input type="text" class="form-control" id="Judul" name="Judul" value="<?= $data_berita->Judul?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
  <input type="date" class="form-control" id="Tanggal" name="Tanggal" value="<?= $data_berita->Tanggal?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gambar</label>
  <input type="file" class="form-control" id="Gambar" name="Gambar">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">artikel</label>
  <input type="text" class="form-control" id="artikel" name="artikel" value="<?= $data_berita->artikel?>">
</div>
<div class="mb-3">
<button class="btn btn-primary" type="submit">Simpan</button>

</div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>