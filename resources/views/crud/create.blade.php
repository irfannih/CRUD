<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data | Sistem CRUD</title>
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
            max-width: 480px;
            width: 100%;
            border-radius: 15px;
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
            color: #888;
        }

        .form-control:focus {
            border-color: #ff0040;
            box-shadow: 0 0 10px #ff0040;
            background-color: #1e1e1e;
            color: #fff;
        }

        .btn-primary, .btn-success {
            background: linear-gradient(90deg, #8000ff, #ff0040);
            border: none;
            color: #fff;
            font-weight: 600;
            box-shadow: 0 0 15px rgba(255, 0, 64, 0.5);
            transition: transform 0.2s;
        }

        .btn-primary:hover, .btn-success:hover {
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

        .button-container {
            display: flex; 
            justify-content: space-between; 
            width: 100%; 
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <div class="card">
        <h4>Tambah Data Baru</h4>
        <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="keahlian" class="form-label">Keahlian</label>
            <input type="text" name="keahlian" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <div class="button-container">
            <a href="{{ route('crud.index') }}" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
    </div>
</body>
</html>
