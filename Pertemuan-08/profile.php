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
        <h1>Biodata Diri</h1>
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
        <section id="home2">
        <img src="../foto.jpeg" alt="Foto Profil Muhammad Nabil Farhan Hariry" width="200">
        <p>Nama:<strong><?php echo $namaMahasiswa; ?></strong></p>
        <p>NIM: <strong><?php echo $nim; ?></strong></p>
        <p>Program Studi: <strong><?php echo $programStudi; ?></strong></p>
        <p>Tempat, Tanggal Lahir: <strong><?php echo $ttl; ?></strong></p>
        <p>Agama: <strong><?php echo $agama; ?><strong></p>
        <p>Alamat: <strong><?php echo $alamat; ?></strong></p>
        </section>
      </main>
      </div>

      <footer class="footer">
        <p>&copy; <strong><?php echo $nim; ?></strong>_<strong><?php echo $namaMahasiswa; ?></strong>_SI1A_UTS_<strong><?php print NAMA_MATA_KULIAH; ?></strong></p>
      </footer>
    <hr>
    <a href="../">Kembali ke Halaman Utama</a>
    <script src="script.js"></script>
  </body>
  </html>