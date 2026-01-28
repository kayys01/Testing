<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard LSP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f6f8fc;
        }
        .hero {
            height: 350px;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: white;
            display: flex;
            align-items: center;
            padding-left: 60px;
        }
        .hero h1 {
            font-size: 42px;
            font-weight: bold;
        }
        .card-custom {
            border-radius: 15px;
            transition: 0.3s;
        }
        .card-custom:hover {
            transform: scale(1.04);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        footer {
            margin-top: 40px;
            padding: 30px 0;
            background: #1e3c72;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->

<!-- NAVBAR BARU -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">
        <img src="lsplogosmkn1.png" width="100"> LSP SMKN 1 Cibinong
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">

        <!-- MENU KELOLA -->
           <li class="nav-item px-3">
          <a class="nav-link fw-semibold" href="home.php">Home</a>
        </li>
        <li class="nav-item dropdown px-3">
          <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
            Kelola
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="skema.php">Skema</a></li>
            <li><a class="dropdown-item" href="unit.php">Unit</a></li>
            <li><a class="dropdown-item" href="asesor.php">Asesor</a></li>
            <li><a class="dropdown-item" href="peserta.php">Peserta</a></li>
            <li><a class="dropdown-item" href="kompetensi.php">Kompetensi</a></li>
            <li><a class="dropdown-item" href="tuk.php">Tempat Uji (TUK)</a></li>
          </ul>
        </li>

        <!-- MENU INPUT -->
        <li class="nav-item dropdown px-3">
          <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
            Input
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="persyaratan.php">Persyaratan</a></li>
            <li><a class="dropdown-item" href="umpan_balik.php">Umpan Balik</a></li>
            <li><a class="dropdown-item" href="proses_asesmen.php">Proses Asesmen</a></li>
            <li><a class="dropdown-item" href="pengurus.php">Pengurus</a></li>
          </ul>
        </li>

        <!-- MENU LAPORAN -->
        <li class="nav-item px-3">
          <a class="nav-link fw-semibold" href="laporan.php">Laporan</a>
        </li>

        <!-- MENU PENGATURAN -->
        <li class="nav-item px-3">
          <a class="nav-link fw-semibold" href="pengaturan.php">Pengaturan</a>
        </li>

      </ul>

      <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

  </div>
</nav>

<!-- HERO -->
<div class="hero">
    <div>
        <h1>Halaman Admin — Aplikasi LSP</h1>
        <p class="mt-3 fs-5">Lembaga Sertifikasi Profesi — SMKN 1 Cibinong</p>
    </div>
</div>

<!-- CONTENT -->
<div class="container mt-5">
    <h2 class="fw-bold mb-4">Informasi Utama</h2>

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card card-custom shadow-sm p-4">
                <h4 class="fw-bold">Total Skema</h4>
                <p class="text-muted">Jumlah skema yang tersedia</p>
                <h2 class="fw-bold text-primary">12</h2>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card card-custom shadow-sm p-4">
                <h4 class="fw-bold">Total Peserta</h4>
                <p class="text-muted">Peserta yang terdaftar</p>
                <h2 class="fw-bold text-success">188</h2>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card card-custom shadow-sm p-4">
                <h4 class="fw-bold">Total Asesor</h4>
                <p class="text-muted">Asesor profesional</p>
                <h2 class="fw-bold text-warning">32</h2>
            </div>
        </div>

    </div>

    <!-- SECTION MENU -->
    <h2 class="fw-bold mt-5 mb-4">Menu Cepat</h2>

    <div class="row g-4">

        <div class="col-md-3">
            <a href="skema.php" class="text-decoration-none">
                <div class="card card-custom shadow-sm p-4 text-center">
                    <h5 class="fw-bold">Kelola Skema</h5>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="peserta.php" class="text-decoration-none">
                <div class="card card-custom shadow-sm p-4 text-center">
                    <h5 class="fw-bold">Kelola Peserta</h5>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="asesor.php" class="text-decoration-none">
                <div class="card card-custom shadow-sm p-4 text-center">
                    <h5 class="fw-bold">Kelola Asesor</h5>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="tuk.php" class="text-decoration-none">
                <div class="card card-custom shadow-sm p-4 text-center">
                    <h5 class="fw-bold">Kelola Tempat Uji</h5>
                </div>
            </a>
        </div>

    </div>

</div>

<!-- FOOTER -->
<footer>
    Aplikasi LSP © 2025
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
