const daftarForm = document.getElementById("daftarForm");
const daftarFeedback = document.getElementById("daftarFeedback");
const namaInput = document.getElementById("nama");
const emailInput = document.getElementById("email");
const tanggalInput = document.getElementById("tanggal");
const jumlahInput = document.getElementById("jumlah");
const janjiInput = document.getElementById("janji");
const pesanInput = document.getElementById("pesan");

daftarForm.addEventListener("submit", (event) => {
event.preventDefault();

daftarFeedback.className = "daftar-feedback-error";

const nama = namaInput.value.trim();
if (nama.length < 3 || nama.length > 50) {
daftarFeedback.textContent = "Nama harus antara 3 hingga 50 karakter.";
return;
}

const email = emailInput.value.trim();
const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if (!emailPattern.test(email)) {
daftarFeedback.textContent = "Email tidak valid.";
return;
}

const tanggal = tanggalInput.value;
if (tanggal === "") {
daftarFeedback.textContent = "Tanggal kunjungan harus diisi.";
return;
}

const jumlah = Number(jumlahInput.value);
if (jumlahInput.value === "" || jumlah < 1 || jumlah > 10) {
daftarFeedback.textContent = "Jumlah Kucing harus diisi.";
return;
}

const jenisJasa = document.querySelector(
"input[name='jenis_jasa']:checked",
);
if (!jenisJasa) {
daftarFeedback.textContent = "Jenis jasa harus dipilih.";
return;
}

const jenisKucing = document.querySelectorAll(
"input[name='kucing']:checked");
if (jenisKucing.length === 0) {
daftarFeedback.textContent = "Jenis kucing harus pilih minimal satu.";
return;
}

const janji = janjiInput.value;
if (janji === "") {
daftarFeedback.textContent = "Janji kunjungan harus diisi.";
return;
}

const pesan = pesanInput.value.trim();
if (pesan.length === 0) {
daftarFeedback.textContent = "Catatan harus diisi.";
return;
}

if (pesan.length > 300) {
daftarFeedback.textContent = "Catatan tidak boleh lebih dari 300 karakter.";
return;
}

daftarFeedback.textContent = "Formulir berhasil dikirim!";
daftarFeedback.className = "daftar-feedback-success";
});

daftarForm.addEventListener("reset", () => {
daftarFeedback.textContent = "";
});

daftarForm.addEventListener("input", () => {
daftarFeedback.textContent = "";
});