<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $tittle ?></title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body>
  <nav class="navbar navbar-expand bg-dark navbar-dark fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav nav-pills">
      <li class="nav-item">
        <a href="<?= base_url() ?>" class="nav-link <?= $tittle == 'HITUNG RESEP' || $tittle == 'Tambah Pesanan' ? 'active' : '' ?>">Home</a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('admin/daftarMenu') ?>" class="nav-link <?= $tittle == 'Daftar Menu' || $tittle == 'Tambah Menu' ? 'active' : '' ?>">Daftar Menu</a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('admin/daftarResep') ?>" class="nav-link <?= $tittle == 'Daftar Resep' || $tittle == 'Tambah Resep' ? 'active' : '' ?>">Daftar Resep</a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('admin/daftarBahan') ?>" class="nav-link <?= $tittle == 'Daftar Bahan' || $tittle == 'Tambah Bahan' ? 'active' : '' ?>">Daftar Bahan</a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('admin/pembukuan') ?>" class="nav-link <?= $tittle == 'Pembukuan' ? 'active' : '' ?>">Pembukuan</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid" style="margin-top: 75px;">
    <h3><?= $subtittle ?></h3>
    <hr>