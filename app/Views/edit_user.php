<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }
    h2 {
      margin-bottom: 20px;
      font-weight: bold;
      color: #343a40;
    }
    .form-label {
      font-weight: 500;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
      transition: background-color 0.3s;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }
  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <div class="container">
    <h2>Edit User</h2>
    <form action="<?= base_url('proses_edit_user')?>" method="POST">
      <input type="hidden" class="form-control" id="id" name="id" value="<?= $data_user->id?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama User</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_user->nama?>" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $data_user->email?>" required>
      </div>
      <div class="mb-3">
        <label for="nohp" class="form-label">No. HP</label>
        <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $data_user->nohp?>" required>
      </div>
      <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <input type="search" list="rolelist" class="form-control" id="role" name="role" value="<?= $data_user->role?>" required>
        <datalist id="rolelist">
          <option value="Supplier">
          <option value="Manager">
          <option value="Administrator">
        </datalist>
      </div>
      <div class="mb-3">
        <label for="supplier_type" class="form-label">Supplier Type</label>
        <input type="search" list="supplierlist" class="form-control" id="supplier_type" name="supplier_type" value="<?= $data_user->supplier_type?>" required>
        <datalist id="supplierlist">
          <option value="Tetap">
          <option value="Tidak Tetap">
        </datalist>
      </div>
      <div class="mb-3 text-center">
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
