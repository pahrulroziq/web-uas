<?php

session_start();
if(!$_SESSION['user_email']) header('Location: index.php');

include 'koneksi.php';
$result = $link->query("SELECT * FROM t_users WHERE user_email='{$_SESSION['user_email']}'");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="min-vh-100 align-items-center justify-content-center row">
            <div class="col-md-4">
                <img src="./top-logo.png" alt="Logo Politeknik" height="48px" class="d-block mx-auto" />

                <div class="d-flex py-5 justify-content-center">
                    <a href="./dosen/index.php" class="d-flex text-decoration-none flex-column text-center">
                        <img src="./lecture.png" alt="Lecturers" class="d-flex mb-3" style="height: 100px; width: 100px;" />
                        <span>Daftar Dosen</span>
                    </a>
                </div>

                <p class="text-center">Halo <?= $data['surename']; ?> <a href="./logout.php">Keluar</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>