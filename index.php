<?php
$servername = "localhost";
$username = "karel";
$password = "26nov2003";
$dbname = "tugas_php";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
   die("Koneksi Database Gagal");
}
echo "Koneksi Database Berhasil";

echo "\n";

// Membuat db
$sql = "CREATE DATABASE tugas_db";
if (mysqli_query($conn, $sql)) {
   echo "Database berhasil dibuat";
} else {
   echo "Error : " . mysqli_error($conn);
}

echo "\n";

// Memilih database yang akan digunakan
mysqli_select_db($conn, "tugas_db");

// Membuat tabel barang
$sql = "CREATE TABLE barang (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   nama_barang VARCHAR(30) NOT NULL,
   harga_barang INT NOT NULL,
   stok_barang INT NOT NULL
)";

if (mysqli_query($conn, $sql)) {
   echo "Tabel barang berhasil dibuat";
} else {
   echo "gagal membuat tabel: " . mysqli_error($conn);
}

echo "\n";

// Insert data into table
$sql = "INSERT INTO barang VALUES ('Pulpen', 4000, 150)";
if (mysqli_query($conn, $sql)) {
   echo "Berhasil menambahkan data ke tabel";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo "\n";

// Update data in table
$sql = "UPDATE barang SET nama_barang='Buku' WHERE id=1";
if (mysqli_query($conn, $sql)) {
   echo "Berhasil mengupdate data barang";
} else {
   echo "Error : " . mysqli_error($conn);
}
?>
