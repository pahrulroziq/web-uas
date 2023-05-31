<?php
  session_start();
  if(isset($_SESSION['user_email']) == true){
    header("location:dashboard.php");
	  exit;
  }

  include 'koneksi.php';

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $statement = $link->prepare('INSERT INTO t_users (user_email, user_password, surename) VALUES(?, ?, ?)');
    $statement->bind_param('sss', $_POST['email'], md5($_POST['password']), $_POST['surename']);
    $result = $statement->execute();

    if($result) header('Location: index.php?status=success');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
  <form action="./register.php" method="POST">
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="email@gmail.com" />
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Password anda" />
    </div>
    <div>
      <label for="surename">Nama Lengkap</label>
      <input type="text" name="surename" id="surename" placeholder="Nama lengkap anda" />
    </div>

    <button type="submit">Daftar</button>
  </form>

</body>
</html>