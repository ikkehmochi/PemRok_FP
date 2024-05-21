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
    <h1>Edit User</h1>
    <form action="<?= base_url('proses_edit_user')?>"method="POST"  >
    <input type="hidden" class="form-control" id="id" name="id" value="<?= $data_user->id?>">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama User</label>
  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_user->nama?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">E-mail</label>
  <input type="text" class="form-control" id="email" name="email" value="<?= $data_user->email?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">No.HP</label>
  <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $data_user->nohp?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Role</label>
  <input type="search" list="rolelist" class="form-control" id="role" name="role" value="<?= $data_user->role?>">
  <datalist id="rolelist">
    <option value="Supplier">
    <option value="Manager">
    <option value="Administrator">
  </datalist>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Supplier Type</label>
  <input type="search" list="supplierlist" class="form-control" id="supplier_type" name="supplier_type" value="<?= $data_user->supplier_type?>">
  <datalist id="supplierlist">
    <option value="Tetap">
    <option value="TidakTetap">
  </datalist>
</div>
<div class="mb-3">
<button class="btn btn-primary" type="submit">Simpan</button>

</div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>