<?php
// view_file.php

// Ambil parameter ID dari URL
$id = $_GET['id'];

// Lakukan pengambilan data file dari database (sesuaikan dengan struktur tabel dan metode penyimpanan Anda)
// Misalnya, menggunakan PDO untuk koneksi database
$pdo = new PDO("mysql:host=localhost;dbname=project_bayu", "root", "");

// Query untuk mengambil data file dari database (sesuaikan dengan struktur tabel)
$query = $pdo->prepare("SELECT nama_file, tipe_file, konten_file FROM tabel_file WHERE id = :id");
$query->bindParam(":id", $id);
$query->execute();

// Ambil hasil query
$result = $query->fetch(PDO::FETCH_ASSOC);

// Set header untuk tipe konten
header('Content-Type: ' . $result['tipe_file']);

// Set header untuk menampilkan file di browser
header('Content-Disposition: inline; filename="' . $result['nama_file'] . '"');

// Keluarkan konten file
echo $result['konten_file'];
?>
