<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medi-hub | Supplier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .container h2 {
      margin-top: 20px;
      margin-bottom: 20px;
      /* font-weight: bold; */
      color: #343a40;
    }
    .container {
      margin-top: 30px;
    }
    table {
      margin-bottom: 30px;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    th, td {
      text-align: center;
      vertical-align: middle;
    }
    .btn:hover {
        transform: scale(1.05);
      }
      .btn-info:hover {
        background-color: #17a2b8;
        border-color: #17a2b8;
      }
      .btn-danger:hover {
        background-color: #dc3545;
        border-color: #dc3545;
      }
      .btn-primary:hover {
        background-color: #007bff;
        border-color: #007bff;'
      }
    .header {
      background-image: url('image/banner2.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      text-align: center;
      padding: 50px 0;
      height: 200px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .container {
      margin: 30px;
    }
    .header h1 {
      font-size: 32px; 
      font-weight: bold; 
      color: white; 
      margin: 0; 
    }
    .header p {
      font-size: 18px; 
      margin: 0; 
    }
    .home-link {
      color: white; 
      cursor: pointer; 
      text-decoration: none; 
      transition: color 0.3s ease;
    }
    .home-link:hover {
      color: #5bc0de;
    }
  </style>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="header">
  <div class="container">
    <h1 class="display-4">Daftar Supplier Tetap</h1>
    <p><a href="<?= base_url('/') ?>" class="home-link">Home</a> > Supplier</p>
  </div>
</div>

<div class="container">
  <h2>Daftar Supplier Tetap</h2>
  <table class="table table-dark table-striped-columns">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">No.HP</th>
        <th scope="col">Role</th>
        <th scope="col">DST</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($all_DST as $DST) : ?>
        <tr>
          <td><?= $DST->id ?></td>
          <td><?= $DST->nama ?></td>
          <td><?= $DST->email ?></td>
          <td><?= $DST->nohp ?></td>
          <td><?= $DST->role ?></td>
          <td><?= $DST->supplier_type ?></td>
          <td><a href="<?= base_url('remove_DST').'/'.$DST->id?>" class="btn btn-danger btn-sm"> HAPUS DARI DST</a></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
