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
      <td>
        <?= $DST->id ?>
      </td>
      <td>
        <?= $DST->nama ?>
      </td>
      <td>
        <?= $DST->email ?>
      </td>
      <td>
        <?= $DST->nohp ?>
      </td>
      <td>
        <?= $DST->role ?>
      </td>
      <td>
        <?= $DST->supplier_type ?>
      </td>
      <td>
      <a href="<?= base_url('remove_DST').'/'.$DST->id?>" class="btn btn-danger btn-sm"> HAPUS DARI DST</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>