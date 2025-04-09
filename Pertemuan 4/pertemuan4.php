<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Pribadi</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .profile-img {
      width: 100%;
      max-width: 200px;
      border-radius: 50%;
    }
    .card {
      margin-bottom: 1rem;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Profil Saya</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#minat">Minat & Hobi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Kontainer Utama -->
<div class="container py-5">
  <div class="row">
    <!-- Kolom Kiri: Foto dan Nama -->
    <div class="col-lg-4 text-center">
      <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Foto Profil" class="profile-img mb-3">
      <h2>Nama Anda</h2>
    </div>
    <!-- Kolom Kanan: Biodata dan Deskripsi Singkat -->
    <div class="col-lg-8">
      <h3>Biodata</h3>
      <ul class="list-unstyled">
        <li><strong>Usia:</strong> 22 tahun</li>
        <li><strong>Alamat:</strong> Jl. Sudirman no 443, Palembang</li>
        <li><strong>Email:</strong> email@uigm.ac.id</li>
        <li><strong>Telepon:</strong> +62 812-3456-7890</li>
      </ul>
      <h3>Tentang Saya</h3>
      <p>
        Saya adalah seorang mahasiswa yang tertarik pada pengembangan web dan desain antarmuka pengguna. Saya memiliki pengalaman dalam menggunakan HTML, CSS, JavaScript, dan framework seperti Bootstrap untuk membuat situs web yang responsif dan menarik.
      </p>
    </div>
  </div>

  <!-- Card Minat & Hobi -->
  <div id="minat" class="mt-5">
    <h3 class="text-center mb-4">Minat & Hobi</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <i class="bi bi-music-note-beamed fs-1 text-primary"></i>
            <h5 class="card-title mt-3">Musik</h5>
            <p class="card-text">Saya menikmati mendengarkan dan memainkan berbagai genre musik, terutama gitar akustik.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <i class="bi bi-code-slash fs-1 text-success"></i>
            <h5 class="card-title mt-3">Coding</h5>
            <p class="card-text">Menghabiskan waktu luang dengan mempelajari bahasa pemrograman baru dan mengembangkan proyek pribadi.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <i class="bi bi-camera fs-1 text-danger"></i>
            <h5 class="card-title mt-3">Fotografi</h5>
            <p class="card-text">Menangkap momen dan pemandangan menarik melalui lensa kamera adalah salah satu hobi favorit saya.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Form Kontak -->
  <div id="kontak" class="mt-5">
    <h3 class="text-center mb-4">Kontak Saya</h3>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda di sini"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle dengan Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle
::contentReference[oaicite:3]{index=3}
 