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
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($all_users as $user) : ?>
    <tr>
      <td>
        <?= $user->id ?>
      </td>
      <td>
        <?= $user->nama ?>
      </td>
      <td>
        <?= $user->email ?>
      </td>
      <td>
        <?= $user->nohp ?>
      </td>
      <td>
        <?= $user->role ?>
      </td>
      <td>
      <a href="<?= base_url('edit_user').'/'.$user->id?>" class="btn btn-info btn-sm"> EDIT </a>
      <a href="<?= base_url('delete_user').'/'.$user->id?>" class="btn btn-danger btn-sm"> DELETE </a>

      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<a href="<?= base_url('add_user')?>" class="btn btn-primary"> Tambah User </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>