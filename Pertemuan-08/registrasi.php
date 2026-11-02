<?php
session_start();

if (isset($_POST['nama'])) {
$nama = trim((string) ($_POST['nama'] ?? ''));
}

$email = trim((string) ($_POST['email'] ?? ''));
$jumlah = trim((string) ($_POST['jumlah'] ?? ''));
$tanggal = trim((string) ($_POST['tanggal'] ?? ''));
$jenis = trim((string) ($_POST['jenis'] ?? ''));
$janji = trim((string) ($_POST['janji'] ?? ''));
$pesan = trim((string) ($_POST['pesan'] ?? ''));
$tujuan = $_POST['tujuan'] ?? [];

$pesanKesalahan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (trim($nama ?? '') === '') {
$pesanKesalahan .= 'Nama lengkap wajib diisi. ';
}

if (trim($email) === '') {
$pesanKesalahan .= 'Email wajib diisi. ';
}

if (trim($tanggal) === '') {
$pesanKesalahan .= 'Tanggal kunjungan wajib diisi. ';
}

if (trim($jumlah) === '') {
$pesanKesalahan .= 'Jumlah wajib diisi. ';
}

if ($jenis === '') {
$pesanKesalahan .= 'Jenis wajib dipilih. ';
}

if (empty($tujuan)) {
$pesanKesalahan .= 'Tujuan wajib dipilih minimal satu. ';
}

if ($janji === '') {
$pesanKesalahan .= 'Jadwal janji wajib dipilih. ';
}

if (trim($pesan) === '') {
$pesanKesalahan .= 'Pesan wajib diisi. ';
}

if (trim($jumlah) !== '') {
$jumlahValid = filter_var(
$jumlahform,
FILTER_VALIDATE_INT
);

if (
$jumlahValid === false ||
$jumlahValid < 1 ||
$jumlahValid > 10
) {
$pesanKesalahan .= '';
}
}
if (trim($email) !== '') {
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
$pesanKesalahan .= 'Format email tidak valid. ';
}
}

if (!in_array($jenis, ['jantan', 'betina'], true)) {
$pesanKesalahan .= 'Jenis kelamin tidak valid. ';
}

if (!in_array($janji, ['PG', 'SR', 'ML'], true)) {
$pesanKesalahan .= 'Jadwal janji tidak valid. ';
}

$tujuanDiizinkan = ['Adopsi', 'Penitipan'];
if (!is_array($tujuan)) {
$pesanKesalahan .= 'Tujuan tidak valid. ';
} else {
foreach ($tujuan as $topik) {
if (!in_array($topik, $tujuanDiizinkan, true)) {
$pesanKesalahan .= 'Pilihan tujuan tidak valid. ';
break;
}
}
}
}




$namaMahasiswa = "Muhammad Nabil Farhan Hariry";
$nim = "2622500015";
$programStudi = "Sistem Informasi";
$ttl = "Pangkalpinang, 17 Maret 2005";
$agama = "Islam";
$alamat = "Jl. Mayor Busni A. Rachman";
const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$_SESSION['pesanKesalahan'] = $pesanKesalahan;
$_SESSION['nama'] = $nama;
$_SESSION['email'] = $email;
$_SESSION['tanggal'] = $tanggal;
$_SESSION['jumlah'] = $jumlah;
$_SESSION['jenis'] = $jenis;
$_SESSION['tujuan'] = $tujuan;
$_SESSION['janji'] = $janji;
$_SESSION['pesan'] = $pesan;
header('Location: registrasi.php');
exit;
}

$pesanKesalahan = $_SESSION['pesanKesalahan'] ?? '';

$nama = $_SESSION['nama'] ?? '';
$email = $_SESSION['email'] ?? '';
$tanggal = $_SESSION['tanggal'] ?? date("Y-m-d");
$jumlah = $_SESSION['jumlah'] ?? '' ;
$jenis = $_SESSION['jenis'] ?? '';
$tujuan = $_SESSION['tujuan'] ?? '';
$janji = $_SESSION['janji'] ?? '';
$pesan = $_SESSION['pesan'] ?? '';

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
        <h1>Registrasi</h1>
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
        <section id="home">
        <h2>Kontak</h2>
        <?php if ($pesanKesalahan !== ''): ?>
        <p class="form-feedback-error">
        <?= htmlspecialchars($pesanKesalahan, ENT_QUOTES, 'UTF-8') ?>
        </p>
        <?php endif; ?>
        <p>Kunjungi <a href="profile.php">Kunjungi Profile Saya</a>.</p>

        <form id="regisForm" action="registrasi.php" method="post" novalidate>
          <div class="form-group">
            <label for="nama">Nama Lengkap</label><br />
            <input class="input-form" type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" minlength="3" maxlength="50" required />
          </div>

          <div class="form-group">
            <label for="email">Email</label><br />
            <input class="input-form" type="email" id="email" name="email" placeholder="nama@email.com" required />
          </div>

          <div class="form-group">
            <label for="tanggal">Tanggal Kunjungan</label><br />
            <input class="input-form" type="date" id="tanggal" name="tanggal" required />
          </div>

          <div class="form-group">
            <label for="jumlah">Jumlah Kucing</label><br />
            <input class="input-form" type="number" id="jumlah" name="jumlah" min="1" max="10" required />
          </div>

          <div class="form-group">
            <p>Jenis Kelamin</p>
            <label for="jantan">Jantan</label>
            <input type="radio" id="jantan" name="jenis" value="jantan" required />
            <label for="betina">Betina</label>
            <input type="radio" id="betina" name="jenis" value="betina" />
          </div>

          <div class="form-group">
            <p>Tujuan</p>
            <label for="adopsi">Adopsi</label>
            <input type="checkbox" id="adopsi" name="tujuan[]" value="Adopsi" />
            <label for="penitipan">Penitipan</label>
            <input type="checkbox" id="penitipan" name="tujuan[]" value="Penitipan" />
          </div>

          <div class="form-group">
           <label for="janji">Buat Janji</label><br />
           <select class="input-form" id="janji" name="janji" required>
            <option value="">-- Jadwal yang Tersedia --</option>
            <option value="PG">Pagi, 09:00-12:00</option>
            <option value="SR">Sore, 13:00-17:00</option>
            <option value="ML">Malam, 18:00-21:00</option>
           </select>
          </div>

          <div class="form-group">
            <label for="pesan">Pesan untuk Kami</label><br />
            <textarea class="input-form" id="pesan" name="pesan" maxlength="300" placeholder="Tulis pesan Anda" required></textarea>
          </div>

          <button type="submit">Kirim</button>
          <button type="reset">Batal</button>
          <p id="regisFeedback"></p>
        </form>
        <?php if (!empty($nama)): ?>
        <h3>Data yang Diterima Peladen</h3>
        <p>Nama:
          <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>
        </p>
        <p>Email:
        <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>
        </p>
        <p>Tanggal kunjungan:
        <?= htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8') ?>
        </p>
        <p>Jumlah Kucing:
          <?= htmlspecialchars($jumlah, ENT_QUOTES, 'UTF-8') ?>
        </p>
        <p>Jenis Kelamin:
          <?= htmlspecialchars($jenis, ENT_QUOTES, 'UTF-8') ?>
        </p>
        <p>Tujuan:</p>
          <?php if (is_array($tujuan) && count($tujuan) > 0): ?>
        <ul>
          <?php foreach ($tujuan as $topik): ?>
        <li>
          <?= htmlspecialchars((string) $topik, ENT_QUOTES, 'UTF-8') ?>
        </li>
          <?php endforeach; ?>
        </ul>
          <?php else: ?>
        <p>Tidak ada tujuan yang dipilih.</p>
          <?php endif; ?>
        <p>Jadwal Janji:
          <?= htmlspecialchars($janji, ENT_QUOTES, 'UTF-8') ?>
        </p>
        <p>Pesan:</p>
        <p><?= nl2br(htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8')) ?></p>
        <?php endif; ?>
      </section>
      </main>
      </div>
      
      <footer class="footer">
        <p>&copy; <strong><?php echo $nim; ?></strong>_<strong><?php echo $namaMahasiswa; ?></strong>_SI1A_UTS_<strong><?php echo $programStudi; ?></strong></p>
      </footer>
    <hr>
    <a href="../">Kembali ke Halaman Utama</a>
    <script src="script.js"></script>
  </body>
  </html>