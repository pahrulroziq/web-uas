<?php
session_start();
if (isset($_SESSION['user_email']) == true) {
  header("location:dashboard.php");
  exit;
}

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $statement = $link->prepare('INSERT INTO t_users (user_email, user_password, surename) VALUES(?, ?, ?)');
  $statement->bind_param('sss', $_POST['email'], md5($_POST['password']), $_POST['surename']);
  $result = $statement->execute();

  if ($result) header('Location: index.php?status=success');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="align-items-center justify-content-center">

  <div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
      <div class="col-md-6">
        <form action="./register.php" method="POST" class="card card-body">
          <div class="mb-3 form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com" />
          </div>
          <div class="mb-3 form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password anda" />
          </div>
          <div class="mb-3 form-group">
            <label for="surename">Nama Lengkap</label>
            <input type="text" name="surename" class="form-control" id="surename" placeholder="Nama lengkap anda" />
          </div>

          <button type="submit" class="btn btn-primary">Daftar</button>
        </form>

        <div class="text-center">Back to <a href="./">Login</a></div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>