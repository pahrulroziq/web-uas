<?php
// Memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

// Mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {
    // Membuat variabel untuk menampung data dari form
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // Membuat dan menjalankan prepared statement untuk menambah data ke database
    $stmt = $link->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
    $stmt->bind_param("ss", $namaDosen, $noHP);
    $stmt->execute();

    // Mengecek apakah query gagal
    if (!$stmt) {
        die("Query gagal dijalankan: " . $stmt->errno . " - " . $stmt->error);
    }
}

// Melakukan redirect (mengalihkan ke halaman viewdosen.php)
header("location:./");
?>
