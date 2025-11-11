<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | Sistem CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #0f0f0f, #1a1a1a, #121212);
      color: #fff;
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
    }

    .navbar {
      background: linear-gradient(90deg, #8000ff, #ff0040);
      box-shadow: 0 0 20px rgba(255, 0, 64, 0.4);
    }

    .navbar-brand {
      font-weight: 700;
      color: #fff !important;
      text-shadow: 0 0 10px #ff0040;
    }

    .nav-link {
      color: #ddd !important;
      transition: all 0.2s ease;
    }

    .nav-link:hover {
      color: #fff !important;
      text-shadow: 0 0 10px #ff0040;
    }

    .nav-link.text-warning {
      color: #ffea00 !important;
      font-weight: bold;
    }

    .card {
      background: rgba(20, 20, 20, 0.85);
      border: 2px solid transparent;
      border-image: linear-gradient(90deg, #ff0040, #ff00ff, #00ffff) 1;
      box-shadow: 0 0 20px rgba(255, 0, 64, 0.4);
      border-radius: 15px;
      padding: 40px;
      max-width: 600px;
      margin: 100px auto;
      text-align: center;
    }

    h2 {
      color: #ff0040;
      text-shadow: 0 0 15px #ff0040;
    }

    .text-muted {
      color: #aaa !important;
    }

    .btn-success {
      background: linear-gradient(90deg, #8000ff, #ff0040);
      border: none;
      color: #fff;
      font-weight: 600;
      box-shadow: 0 0 15px rgba(255, 0, 64, 0.5);
      transition: all 0.2s ease;
    }

    .btn-success:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px #ff0040;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard') }}">⚡ Sistem CRUD</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('crud.index') }}">Data CRUD</a></li>
          <li class="nav-item"><a class="nav-link text-warning fw-bold" href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container py-5 text-center">
    <div class="card">
      <h2 class="mb-3">Selamat Datang, {{ session('user') }}</h2>
      <p class="text-muted">Anda berhasil login ke sistem CRUD sederhana berbasis Laravel tanpa database.</p>
      <a href="{{ route('crud.index') }}" class="btn btn-success mt-3">Silahkan Masuk ke Halaman CRUD </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
