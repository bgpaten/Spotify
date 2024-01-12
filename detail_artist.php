<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretest PWL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7ae1982935.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <style>
        .search {
            color: #989798;
        }

        .search:hover {
            color: #f5f6f6;
        }

        .recent {
            color: #989798;
        }

        .recent:hover {
            color: #f5f6f6;
        }
    </style>
</head>

<body style="background-color: black;">

    <nav class="navbar navbar-expand-lg" style="background-color: #191919;">
        <div class="container-fluid px-5">
            <a class="navbar" href="dashboard.php">
                <img src="img/logopala-removebg-preview.png" alt="Logo" width="125" height="40" class="d-inline-block align-text-top">
            </a>
            <h5><span class="badge bg-light px-4 py-2" style="color: black; border-radius: 20px;">Explore premium</span></h5>
        </div>
        </div>
    </nav>

    <div class="container pb-5">
        <div class="row mb-5">
            <div class="col-md-3 mt-3">
                <div class="card" style="background-color: #121212;">
                    <div class="card-body">
                        <a href="dashboard.php" style="text-decoration: none;">
                            <p style="color: #f5f6f6;"><Strong><i class="fa-solid fa-house"></i> Home</Strong></p>
                        </a>
                        <p class="search"><Strong><i class="fa-solid fa-magnifying-glass"></i> Search</Strong></p>
                    </div>
                </div>
                <div class="card mt-3" style="background-color: #121212;">
                    <div class="card-body pr-1">
                        <p class="recent"><strong><i class="fa-brands fa-spotify"></i> Recent Listening</strong></p>

                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/musik.jpg" alt="" width="50" height="50">
                            </div>
                            <div class="col-md-9">
                                <p><strong style="color: #dbdce0;">Yaa Hanana</strong><br><small style="color: #606060;">Habib syech assegaf</small></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/musik.jpg" alt="" width="50" height="50">
                            </div>
                            <div class="col-md-9">
                                <p><strong style="color: #dbdce0;">Yaa Hanana</strong><br><small style="color: #606060;">Habib syech assegaf</small></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/musik.jpg" alt="" width="50" height="50">
                            </div>
                            <div class="col-md-9">
                                <p><strong style="color: #dbdce0;">Yaa Hanana</strong><br><small style="color: #606060;">Habib syech assegaf</small></p>
                            </div>
                        </div>
                        <p style="color: #545454;"><small>see more <i class="fa-solid fa-circle-right"></i></small></p>
                    </div>
                </div>
            </div>

            <?php

            $genre = [
                [
                    "id" => 1,
                    "nama_genre" => "Pop"
                ],
                [
                    "id" => 2,
                    "nama_genre" => "Klasik"
                ],
                [
                    "id" => 3,
                    "nama_genre" => "Rock"
                ]
            ];

            $album = [
                [
                    "id" => 1,
                    "nama_album" => "Sebuah Nama, Sebuah Cerita"
                ],
                [
                    "id" => 2,
                    "nama_album" => "Kisah Klasik"
                ],
                [
                    "id" => 3,
                    "nama_album" => "Awan Kinton"
                ]
            ];

            $music = [
                [
                    "id" => 1,
                    "judul_lagu" => "Numb",
                    "artist" => "Linkin Park",
                    "listener" => "30578980",
                    "duration" => "2.59",
                    "genre_id" => 3,
                    "album_id" => 1
                ],
                [
                    "id" => 2,
                    "judul_lagu" => "Laskar Pelangi",
                    "artist" => "Nidji",
                    "listener" => "10548880",
                    "duration" => "3.12",
                    "genre_id" => 3,
                    "album_id" => 1
                ],
                [
                    "id" => 3,
                    "judul_lagu" => "Selimut Hati",
                    "artist" => "Dewa 19",
                    "listener" => "20118980",
                    "duration" => "4.05",
                    "genre_id" => 2,
                    "album_id" => 2
                ],
                [
                    "id" => 4,
                    "judul_lagu" => "Separuh Aku",
                    "artist" => "Noah",
                    "listener" => "10078980",
                    "duration" => "3.02",
                    "genre_id" => 1,
                    "album_id" => 2
                ],
                [
                    "id" => 5,
                    "judul_lagu" => "Tanya Bapak",
                    "artist" => "Asep Kasep",
                    "listener" => "15799080",
                    "duration" => "3.45",
                    "genre_id" => 1,
                    "album_id" => 3
                ],
            ];

            ?>

            <div class="col-md-9 mt-3">
                <div class="card text-bg-dark">
                    <img src="img/linkinjpg" class="card-img-top">

                    <?php
                    foreach ($music as $msc) {

                        if ($_GET["id"] == $msc["id"]) {
                    ?>

                            <div class="card-img-overlay" style="padding-top: 15%;">
                                <p class="card-title mt-5"><i class="fa-solid fa-circle-check" style="color: #1cc5f0;"></i> Artist verificated</p>
                                <h1 class="card-text" style="color: #ffffff; font-size: 65px; margin-bottom: 0; font-family: 'Open Sans', sans-serif;"><strong><?= $msc["artist"] ?></strong></h1>
                                <small><i class="fa-solid fa-circle-play"></i> <?= number_format($msc["listener"], 0, ",", ",")   ?> monthly listener</small>
                                <div class="d-grid gap-2 d-md-block mt-5">
                                    <span class="badge rounded-pill  px-3 py-2" style="background-color: #16dd67; color: #1a261e; font-size: 14px;"><i class="fa-solid fa-circle-pause"></i> Pause</span>
                                    <span class="badge rounded-pill  px-4 py-2 mx-3" style="background-color: #f6f7f9; color: #1a261e; font-size: 14px;">Follow</span>
                                </div>
                            </div>

                </div>
                <div class="card mt-3" style="background-color: #202020; color: #ffffff;">
                    <div class="card-body">
                        <table class="table table-borderless mt-5">
                            <thead>
                                <tr>
                                    <th style="background-color: #202020; color: #7d7d79;" scope="col">#</th>
                                    <th style="background-color: #202020; color: #7d7d79;" scope="col">Title</th>
                                    <th style="background-color: #202020; color: #7d7d79;" scope="col">Album</th>
                                    <th style="background-color: #202020; color: #7d7d79;" scope="col">Artist</th>
                                    <th style="background-color: #202020; color: #7d7d79;" scope="col"><i class="fa-regular fa-clock"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            }
                        }

                        $no = 1;
                        if ($_GET["id"] == 1) {
                            foreach ($music as $msc) {

                                if ($msc["album_id"] == 1) {

                                ?>

                                    <tr>
                                        <th style="background-color: #202020; color: #f9f8fa;" scope="row"><?= $no++ ?></th>
                                        <td style="background-color: #202020; color: #f9f8fa;"><?= $msc['judul_lagu'] ?></td>
                                        <?php
                                        foreach ($album as $alb) {
                                            if ($alb["id"] == $msc["album_id"]) {

                                        ?>
                                                <td style="background-color: #202020; color: #f9f8fa;"><?= $alb['nama_album'] ?></td>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <td style="background-color: #202020; color: #f9f8fa;"><?= $msc['artist'] ?></td>
                                        <td style="background-color: #202020; color: #f9f8fa;"><?= $msc['duration'] ?></td>
                                    </tr>
                                <?php
                                }
                            }
                        } elseif ($_GET["id"] == 2) {

                            foreach ($music as $msc) {

                                if ($msc["album_id"] == 1) {
                                ?>

                                    <tr>
                                        <th style="background-color: #202020; color: #ffffff;" scope="row"><?= $no++ ?></th>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['judul_lagu'] ?></td>
                                        <?php
                                        foreach ($album as $alb) {
                                            if ($alb["id"] == $msc["album_id"]) {

                                        ?>
                                                <td style="background-color: #202020; color: #ffffff;"><?= $alb['nama_album'] ?></td>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['artist'] ?></td>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['duration'] ?></td>
                                    </tr>
                                <?php
                                }
                            }
                        } elseif ($_GET["id"] == 3) {

                            foreach ($music as $msc) {

                                if ($msc["album_id"] == 2) {
                                ?>

                                    <tr>
                                        <th style="background-color: #202020; color: #ffffff;" scope="row"><?= $no++ ?></th>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['judul_lagu'] ?></td>
                                        <?php
                                        foreach ($album as $alb) {
                                            if ($alb["id"] == $msc["album_id"]) {

                                        ?>
                                                <td style="background-color: #202020; color: #ffffff;"><?= $alb['nama_album'] ?></td>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['artist'] ?></td>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['duration'] ?></td>
                                    </tr>
                                <?php
                                }
                            }
                        } elseif ($_GET["id"] == 4) {

                            foreach ($music as $msc) {

                                if ($msc["album_id"] == 2) {
                                ?>

                                    <tr>
                                        <th style="background-color: #202020; color: #ffffff;" scope="row"><?= $no++ ?></th>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['judul_lagu'] ?></td>
                                        <?php
                                        foreach ($album as $alb) {
                                            if ($alb["id"] == $msc["album_id"]) {

                                        ?>
                                                <td style="background-color: #202020; color: #ffffff;"><?= $alb['nama_album'] ?></td>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['artist'] ?></td>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['duration'] ?></td>
                                    </tr>
                                <?php
                                }
                            }
                        } elseif ($_GET["id"] == 5) {

                            foreach ($music as $msc) {

                                if ($msc["album_id"] == 3) {
                                ?>

                                    <tr>
                                        <th style="background-color: #202020; color: #ffffff;" scope="row"><?= $no++ ?></th>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['judul_lagu'] ?></td>
                                        <?php
                                        foreach ($album as $alb) {
                                            if ($alb["id"] == $msc["album_id"]) {

                                        ?>
                                                <td style="background-color: #202020; color: #ffffff;"><?= $alb['nama_album'] ?></td>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['artist'] ?></td>
                                        <td style="background-color: #202020; color: #ffffff;"><?= $msc['duration'] ?></td>
                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>