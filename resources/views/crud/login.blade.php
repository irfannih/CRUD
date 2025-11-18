<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | Sistem CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #ff0040, #9000ff, #00e5ff);
      background-size: 400% 400%;
      animation: bgMove 10s ease infinite;
      color: #fff;
    }

    @keyframes bgMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .login-card {
      background: #111;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.6);
      width: 100%;
      max-width: 380px;
    }

    h4 {
      text-align: center;
      color: #ff0040;
      text-shadow: 0 0 10px #ff0040;
      margin-bottom: 20px;
    }

    .form-control {
      background-color: #1b1b1b;
      border: 1px solid #333;
      color: #fff !important; /* ✅ teks input jadi putih */
    }

    .form-control::placeholder {
      color: #aaa; /* ✅ placeholder abu terang */
    }

    .form-control:focus {
      border-color: #ff0040;
      box-shadow: 0 0 10px #ff0040;
      background-color: #1e1e1e;
      color: #fff;
    }

    .btn-login {
      background: linear-gradient(90deg, #ff0040, #9000ff);
      border: none;
      color: #fff;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: linear-gradient(90deg, #9000ff, #ff0040);
      box-shadow: 0 0 10px #ff0040;
    }

    footer {
      position: fixed;
      bottom: 15px;
      width: 100%;
      text-align: center;
      color: rgba(255,255,255,0.8);
      font-size: 0.9rem;
    }

    footer span {
      color: #ff0040;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h4>👤 Login Admin</h4>

    {{-- ✅ Pesan error --}}
    @if (session('error'))
      <div class="alert alert-danger text-center py-2">
        {{ session('error') }}
      </div>
    @endif

    {{-- ✅ Pesan sukses (misal logout berhasil) --}}
    @if (session('success'))
      <div class="alert alert-success text-center py-2">
        {{ session('success') }}
      </div>
    @endif

    {{-- ✅ Form login --}}
    <form action="{{ route('login.post') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan username" required autofocus>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
      </div>
      <button type="submit" class="btn btn-login w-100">Masuk</button>
    </form>
    <div class="card-footer text-center">
            <small>Gunakan username: <b>Irfan</b> dan password: <b>140206</b></small>
          </div>
  </div>
  

  <footer>
    © {{ date('Y') }} <span>Sistem CRUD</span> | Irfannih
  </footer>
</body>
</html>
