<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/ilmudetil.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-datetimepicker.css" />
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/moment-with-locales.js"></script>
    <script src="../../assets/js/jquery-1.11.3.min.js"></script>
    <script src="../../assets/js/bootstrap-datetimepicker.js"></script>


    <title><?= $judul; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url() ?>dashboard/index">Penggajian Pegawai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= base_url() ?>dashboard">Dashboard</a>
                    <a class="nav-link" href="<?= base_url() ?>pegawai/index">Pegawai</a>
                    <a class="nav-link" href="<?= base_url() ?>golongan/index">Golonngan</a>
                    <a class="nav-link" href="<?= base_url() ?>gaji/index">Gaji</a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>Auth/logout">Log Out</a>
                </div>
            </div>
        </div>
    </nav>