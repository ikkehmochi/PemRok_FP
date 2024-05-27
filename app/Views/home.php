<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
      body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
      }
      h1 {
        margin-top: 20px;
        margin-bottom: 20px;
        font-weight: bold;
        color: #343a40;
      }
      .container {
        margin-top: 40px;
      }
      table {
        margin-bottom: 40px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      th, td {
        text-align: center;
        vertical-align: middle;
      }
      img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-top: 10px;
        margin-bottom: 10px;
      }
      /* Add new style for background image */
      .header {
            background-image: url('image/banner1.jpg');
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

        .container{
          margin : 50px;
        }
        /* Styling for "Tentang Kami" */
        .header h1 {
            font-size: 24px; 
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
        }
    </style>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
  
    <div class="container">
      <h1>Selamat Datang di Toko Medis Kelompok 1</h1>
      
      <?php foreach($all_berita as $berita) : ?>
        <table class="table table-dark table-striped-columns">
          <thead>
            <tr>
              <th scope="col"><?= htmlspecialchars($berita->Judul) ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?= htmlspecialchars($berita->Tanggal) ?></td>
            </tr>
            <?php if ($berita->Gambar != null) { ?>
            <tr>
              <td><img src="images/<?= htmlspecialchars($berita->Gambar); ?>"></td>
            </tr>
            <?php } ?>
            <tr>
              <td><?= nl2br(htmlspecialchars($berita->artikel)) ?></td>
            </tr>
          </tbody>
        </table>
      <?php endforeach ?>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
