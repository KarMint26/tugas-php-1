<?php
$servername = "localhost";
$username = "karel";
$password = "26nov2003";
$dbname = "tugas_php";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
   die("Koneksi Database Gagal: " . $conn->connect_error);
}
echo "Koneksi Database Berhasil";

echo "\n";

// Membuat db
$sql = "CREATE DATABASE tugas_db";
if ($conn->query($sql) === TRUE) {
   echo "Database berhasil dibuat";
} else {
   echo "Error : " . $conn->error;
}

echo "\n";

// Memilih database yang akan digunakan
$conn->select_db("tugas_db");

// Membuat tabel barang
$sql = "CREATE TABLE barang (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   nama_barang VARCHAR(30) NOT NULL,
   harga_barang INT NOT NULL,
   stok_barang INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
   echo "Tabel barang berhasil dibuat";
} else {
   echo "gagal membuat tabel: " . $conn->error;
}

echo "\n";

// Insert data into table
$sql = "INSERT INTO barang VALUES ('Pulpen', 4000, 150)";
if ($conn->query($sql) === TRUE) {
   echo "Berhasil menambahkan data ke tabel";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "\n";

// Update data in table
$sql = "UPDATE barang SET nama_barang='Buku' WHERE id=1";
if ($conn->query($sql) === TRUE) {
   echo "Berhasil mengupdate data barang";
} else {
   echo "Error : " . $conn->error;
}
?>
