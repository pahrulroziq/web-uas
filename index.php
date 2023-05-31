<?php
session_start();
if (isset($_SESSION['user_email']) == true) {
    header("location:dashboard.php");
    exit;
}
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
            <div class="col-md-5">
                <img src="./top-logo.png" alt="Logo Politeknik" height="48px" class="d-block mx-auto" />

                <div class="card mt-4">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="form-group mb-3">
                                <label>Username:</label>
                                <input type="email" name="user_email" class="form-control" value="<?php if (isset($_COOKIE["user_email"])) { echo $_COOKIE["user_email"]; } ?>" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Password:</label>
                                <input type="password" name="user_password" class="form-control" value="<?php if (isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" required>
                            </div>
                            <div class="form-group my-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="remember" id="remember" <?php if (isset($_COOKIE["user_email"])) { ?> checked <?php } ?> />
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                            </div>
                            <input type="submit" name="login" value="Login" class="btn btn-primary">
                        </form>

                        <div class="text-center mt-3 d-block">Belum ada akun? <a href="./register.php">Daftar</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>