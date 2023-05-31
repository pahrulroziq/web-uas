<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Data Dosen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="min-vh-100 align-items-center justify-content-center row">
            <div class="col-md-5">
                <a href="../dashboard.php">
                    <img src="../top-logo.png" alt="Logo Politeknik" height="48px" class="d-block mx-auto" />
                </a>

                <div class="card mt-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3>Input Data Dosen</h3>

                        <a href="./" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">

                        <form action="input.php" id="form_dosen" method="post">
                            <div class="form-group mb-3">
                                <label for="nama">Nama Dosen : </label>
                                <input type="text" name="namaDosen" id="namaDosen" class="form-control" />
                            </div>
                            <div class="mb-3 form-group">
                                <label for="ipk">Nomor HP :</label>
                                <input type="text" name="noHP" id="noHP" class="form-control" placeholder="Contoh : 081222333444">
                            </div>
                            
                            <input type="submit" name="input" value="Simpan" class="btn btn-primary" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
