<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretest PWL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #191919;">
        <div class="container-fluid px-5">
            <a class="navbar" href="login.php">
                <img src="img/logopala-removebg-preview.png" alt="Logo" width="125" height="40" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-text">

            </span>
        </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="img/logo.jpg" class="card-img-top rounded mx-auto d-block" style="height: 100px; width: 100px; text-align:center;">
                        <h4 class="mt-3" style="text-align: center;">Spotify</h4>
                        <form action="" method="post">
                            <div class="col-12 mt-5"> <label for="barang" class="form-label">Email or username </label><br>
                                <input type="text" class="form-control" name="user" required>
                            </div>
                            <div class="col-12 mt-3"> <label for="barang" class="form-label">Password </label><br>
                                <input type="password" class="form-control" name="pw" required>
                            </div>
                            <div class="d-grid gap-2 mt-5 mb-3">
                                <button name="pencet" class="btn" type="submit" style="background-color: #18d85f; color:white;"><b>Masuk</b></button>
                            </div>
                        </form>

                        <?php
                        $user = $_POST['user'];
                        $pasword = $_POST['pw'];

                        if ($user == "asep" && $pasword == "asepkasep") {
                            header("Location: dashboard.php");
                        } else {
                            // login gagal
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <img src="img/photo_2023-12-08_13-49-22.jpg" class="img-fluid mt-5">
            </div>
        </div>
    </div>





    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>