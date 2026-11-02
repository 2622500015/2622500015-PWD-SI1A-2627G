const regisForm = document.getElementById("regisForm");
const regisFeedback = document.getElementById("regisFeedback");
const namaInput = document.getElementById("nama");
const emailInput = document.getElementById("email");
const tanggalInput = document.getElementById("tanggal");
const jumlahInput = document.getElementById("jumlah");
const janjiInput = document.getElementById("janji");
const pesanInput = document.getElementById("pesan")

regisForm.addEventListener("submit", (event) => {
 event.preventDefault();

regisFeedback.className = "regis-Feedback-error";

const nama = namaInput.value.trim();
if (nama.length < 3 || nama.length > 50) {
regisFeedback.textContent = "Nama lengkap harus diisi 3 sampai 50 karakter.";
return;
}

const email = emailInput.value.trim();
const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if (!emailPattern.test(email)) {
regisFeedback.textContent = "Masukkan alamat email yang valid.";
return;
}

const tanggal = tanggalInput.value;
if (tanggal === "") {
regisFeedback.textContent = "Tanggal kunjungan harus diisi.";
return;
}

const jumlah = Number (jumlahInput.value);
if (jumlahInput.value ==="" || jumlah < 1 || jumlah > 10) {
regisFeedback.textContent = "Jumlah kucing harus diisi dengan angka 1 sampai 10.";
return;
}

const jenis = document.querySelector(
'input[name="jenis"]:checked',
);
if (!jenis) {
regisFeedback.textContent = "Pilih jenis kelamin.";
return;
}

const tujuan = document.querySelectorAll('input[name="tujuan"]:checked, input[name="tujuan[]"]:checked');
if (tujuan.length === 0) {
regisFeedback.textContent = "Pilih minimal satu tujuan.";
return;
}

const janji = janjiInput.value;
if (janji === "") {
regisFeedback.textContent = "Pilih jadwal janji.";
return;
}

const pesan = pesanInput.value.trim();
if (pesan.length === 0) {
regisFeedback.textContent = "Pesan harus diisi.";
return;
}

if (pesan.length > 300) {
regisFeedback.textContent = "Pesan maksimal 300 karakter.";
return;
}

regisFeedback.textContent = "Registrasi berhasil dikirim.";
regisFeedback.className = "regis-Feedback-success";
regisForm.submit();
});

regisForm.addEventListener("reset", () => {
regisFeedback.textContent = "";
});

regisForm.addEventListener("input", () => {
regisFeedback.textContent = "";
});
