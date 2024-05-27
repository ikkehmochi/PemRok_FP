<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medi-hub | Tentang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        .container h2 {
            margin-bottom: 30px;
            color: #343a40;
        }
        .container h3 {
            color: #6c757d;
        }
        .header {
            background-image: url('image/banner3.jpg');
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
        .about-section {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .about-section img {
            max-width: 30%;
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="header">
        <div class="container">
            <h1 class="display-4">Tentang Kami</h1>
            <p><a href="<?= base_url('/') ?>" class="home-link">Home</a> > Tentang</p>
        </div>
    </div>

    <div class="container about-section">
        <h2>Tentang Medi-hub</h2>
        <img src="image/banner4.jpg" alt="Medi-hub Overview">
        <p>Medi-hub adalah platform digital terkemuka yang menyediakan solusi komprehensif untuk pengelolaan dan distribusi produk medis. Kami berkomitmen untuk memberikan pelayanan terbaik kepada penyedia layanan kesehatan dan industri farmasi dengan menyediakan berbagai macam produk dan layanan berkualitas tinggi.</p>
        <p>Dengan jaringan yang luas dan teknologi mutakhir, Medi-hub memastikan pengiriman cepat dan aman untuk memenuhi kebutuhan pelanggan kami. Kami percaya bahwa akses yang mudah ke produk medis adalah kunci untuk meningkatkan kualitas layanan kesehatan di seluruh dunia.</p>
        <p>Tim kami terdiri dari para profesional yang berdedikasi dan berpengalaman dalam industri kesehatan. Kami bekerja keras untuk membangun hubungan yang kuat dengan pelanggan dan mitra kami, serta berinovasi untuk terus meningkatkan layanan kami.</p>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
