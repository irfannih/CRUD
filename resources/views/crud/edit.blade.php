<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data | Sistem CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #0f0f0f, #1a1a1a, #121212);
      color: #fff;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
    }

    .card {
      background: #0e0e0e;
      border: 2px solid transparent;
      border-image: linear-gradient(90deg, #ff0040, #ff00ff, #00ffff) 1;
      box-shadow: 0 0 20px rgba(255, 0, 64, 0.4);
      border-radius: 15px;
      max-width: 500px;
      width: 100%;
      padding: 30px;
    }

    h4 {
      color: #ff0040;
      text-align: center;
      margin-bottom: 25px;
      text-shadow: 0 0 10px #ff0040;
    }

    .form-label {
      color: #ccc;
      font-weight: 500;
    }

    .form-control {
      background-color: #1b1b1b;
      border: 1px solid #333;
      color: #fff;
    }

    .form-control::placeholder {
      color: #777;
    }

    .form-control:focus {
      border-color: #ff0040;
      box-shadow: 0 0 10px #ff0040;
      background-color: #1e1e1e;
      color: #fff;
    }

    img {
      border: 2px solid #ff0040;
      box-shadow: 0 0 10px rgba(255, 0, 64, 0.6);
      border-radius: 8px;
    }

    .btn-primary {
      background: linear-gradient(90deg, #8000ff, #ff0040);
      border: none;
      color: #fff;
      font-weight: 600;
      box-shadow: 0 0 15px rgba(255, 0, 64, 0.5);
      transition: all 0.2s ease;
    }

    .btn-primary:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px #ff0040;
    }

    .btn-secondary {
      background-color: #333;
      border: none;
      color: #ccc;
    }

    .btn-secondary:hover {
      background-color: #444;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="card">
    <h4>Edit Data</h4>

    <form action="{{ route('crud.update', $keahlian->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input 
            type="text" 
            name="nama" 
            class="form-control" 
            value="{{ $keahlian->nama }}" 
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Keahlian</label>
        <input 
            type="text" 
            name="keahlian" 
            class="form-control" 
            value="{{ $keahlian->keahlian }}" 
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Foto Baru</label>
        <input type="file" name="foto" class="form-control">
        @if (!empty($keahlian->foto))
            <div class="mt-3 text-center">
                <img 
                    src="{{ asset('storage/' . $keahlian->foto) }}" 
                    width="120" 
                    alt="Foto {{ $keahlian->nama }}"
                >
            </div>
        @endif
    </div>

    <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('crud.index') }}" class="btn btn-danger px-4">Kembali</a>
        <button type="submit" class="btn btn-primary px-4">Update</button>
    </div>
</form>

  </div>
</body>
</html>
