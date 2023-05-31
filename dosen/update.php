<?php
// Mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
    // Buat koneksi dengan database
    include("koneksi.php");

    // Membuat variabel untuk menampung data dari form edit
    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // Membuat dan menjalankan prepared statement untuk melakukan UPDATE
    $stmt = $link->prepare("UPDATE t_dosen SET namaDosen = ?, noHP = ? WHERE idDosen = ?");
    $stmt->bind_param("sss", $namaDosen, $noHP, $id);
    $stmt->execute();

    // Mengecek apakah query gagal
    if (!$stmt) {
        die("Query gagal dijalankan: " . $stmt->errno . " - " . $stmt->error);
    }
}
// Lakukan redirect ke halaman viewdosen.php
header("location:viewdosen.php");
?>