<?php
include '../koneksi.php'; // memanggil file koneksi.php untuk melakukan koneksi database

// Proses pencarian
$keyword = '';
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // Persiapan prepared statement dengan parameter yang diikat
    $stmt = $link->prepare("SELECT * FROM t_dosen WHERE namaDosen LIKE ?");
    $keyword = "%" . $keyword . "%";
    $stmt->bind_param("s", $keyword);
    $stmt->execute();

    // Mendapatkan hasil
    $result = $stmt->get_result();

    // Mengecek apakah ada error ketika menjalankan prepared statement
    if (!$result) {
        die("Query Error: " . $stmt->errno . " - " . $stmt->error);
    }
} else {
    // Jika tidak ada keyword pencarian, jalankan query untuk menampilkan semua data diurutkan ascending berdasarkan IdDosen
    $query = "SELECT * FROM t_dosen ORDER BY IdDosen ASC";
    $result = mysqli_query($link, $query);

    // Mengecek apakah ada error ketika menjalankan query
    if (!$result) {
        die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Data Dosen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="min-vh-100 align-items-center justify-content-center row">
            <div class="col-md-8">
                <a href="../dashboard.php">
                    <img src="../top-logo.png" alt="Logo Politeknik" height="48px" class="d-block mx-auto" />
                </a>

                <div class="card mt-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3>Lecturers</h3>

                        <a href="./create.php" class="btn btn-primary">Add New Lecturer</a>
                    </div>
                    <div class="table-responsive">

                        <table class="table mb-0 table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Nama Dosen</th>
                                <th>No HP</th>
                                <th>Pilihan</th>
                            </tr>
                            <?php
                            if($result->num_rows === 0) { ?>
                            <tr>
                                <td colspan="4" class="text-center">Ooopss, Data not found!</td>
                            </tr>
                            <?php } else {
                                while ($data = $result->fetch_assoc()) {
                                    // Mencetak atau menampilkan data
                                    echo "<tr>";
                                    echo "<td>" . $data['idDosen'] . "</td>"; // Menampilkan data id dosen
                                    echo "<td>" . $data['namaDosen'] . "</td>"; // Menampilkan data nama dosen
                                    echo "<td>" . $data['noHP'] . "</td>"; // Menampilkan data no hp
    
                                    // Membuat link untuk mengedit dan menghapus data
                                    echo '<td>
                                        <a href="edit.php?idDosen=' . $data['idDosen'] . '">Edit</a> /
                                        <a href="delete.php?idDosen=' . $data['idDosen'] . '"
                                            onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
                                        </td>';
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
