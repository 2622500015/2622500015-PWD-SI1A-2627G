<?php
$namaMahasiswa = "Muhammad Nabil Farhan Hariry";
$nim = "2622500015";
$programStudi = "Sistem Informasi";
$ttl = "Pangkalpinang, 17 Maret 2005";
$agama = "Islam";
$alamat = "Jl. Mayor Busni A. Rachman";
const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2622500015-Muhammad Nabil Farhan Hariry-SI1A</title>
    <link rel="stylesheet" href="style.css">
    </head>
   <body>
      <header class="header">
        <img src="./logo.png" alt="Logo Catshop" class="logo">
        <h1>Hariry Catshop</h1>
      </header>

        <div class="layout">
        <nav class="nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="registrasi.php">Registrasi</a></li>
           <ul>
        </nav>

      <main class="konten">
        <section id="home3">
        <h1>Selamat datang di Hariry Catshop</h1>
        <p>Menjual berbagai macam makanan kucing dan Menyediakan jasa penitipan dan adopsi Kucing</p>
        <img src="./food1.png" alt="Gambar Petshop" width="300">
        <p>Makanan Kucing Kering</p>
        <img src="./food2.png" alt="Gambar Petshop" width="300">
        <p>Makanan Kucing Basah</p>
        <img src="./food3.png" alt="Gambar Petshop" width="300">
        <p>Makanan Kucing Snack</p>
        <img src="./apc.png" alt="Gambar Petshop" width="300">
        <p><a href="registrasi.php">Adopsi & Penitipan Kucing</a></p>
      </main>
      </section>
      </div>
      
      <footer class="footer">
        <p>&copy; <strong><?php echo $nim; ?></strong>_<strong><?php echo $namaMahasiswa; ?></strong>_SI1A_UTS_<strong><?php echo $programStudi; ?></strong></p>
      </footer>
    <hr>
    <a href="../">Kembali ke Halaman Utama</a>
    <script src="script.js"></script>
  </body>
  </html>