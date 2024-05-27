<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MEDI-HUB</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .navbar {
      background-color: #B9D2E0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand {
      margin-left: 40px;
      font-size: 1.5rem;
      font-weight: bold;
      color: #fff; 
    }
    .navbar-nav {
      margin-right: 40px;
      font-size: 13px;
      font-weight: 800;
      line-height: 27px;
      text-transform: uppercase;
      position: relative;
    }
    .navbar-nav .nav-item .nav-link {
      font-size: 1.1rem;
      padding: 10px 15px;
      color: #fff; 
    }
    .navbar-nav .nav-item .nav-link:hover {
      background-color: #f8f9fa;
      border-radius: 5px;
    }
    .navbar-nav .nav-item .nav-link.active {
      color: #007bff;
      font-weight: bold;
    }
    .navbar-toggler {
      border: none;
    }
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=UTF8,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?= base_url('')?>" style="color: #fff;">MEDI-HUB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link" href="<?= base_url('users')?>" style="color: #fff;">Users</a>
        <a class="nav-item nav-link" href="<?= base_url('DST')?>" style="color: #fff;">Suppliers</a>
        <a class="nav-item nav-link" href="<?= base_url('tentang')?>" style="color: #fff;">Tentang</a>
        <a class="nav-item nav-link" href="<?= base_url('berita')?>" style="color: #fff;">Berita</a>
      </div>
    </div>  
  </nav>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
