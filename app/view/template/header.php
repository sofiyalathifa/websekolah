<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="http://localhost:81/phpmvc/public/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost:81/phpmvc/public/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <img src="<?= BASE_URL; ?>/img/logo2.png" width="50" height="50" alt=" ">
            <a class="navbar-brand" href="<?= BASE_URL; ?>">SMKN2<span>Trenggalek</span></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kompetensi Keahlian
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="kuliner">Kuliner</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="dpib">Design Pemodelan dan<br/> Informasi Bangunan</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="rpl">Rekayasa Perangkat<br/> Lunak</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="tptu">Teknik Pemanasan,<br/>Tata Udara dan Pendingin</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="akl">Akuntansi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tkp">Teknik Konstruksi <br/>dan Perumahan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tp">Teknik Pengelasan</a>
                    </li>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user/profile">About</a>
                </div>
            </div>
        </div>
    </nav>



    
    