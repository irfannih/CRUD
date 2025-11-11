<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data CRUD - Neon Mode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1a1a1a 30%, #2e2e2e 90%);
            color: #f1f1f1;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(90deg, #111 0%, #3a0ca3 50%, #ff0054 100%);
            box-shadow: 0 0 15px rgba(255, 0, 84, 0.4);
        }

        .navbar-brand {
            color: #fff !important;
            text-shadow: 0 0 10px #ff0054;
        }

        .nav-link {
            color: #eee !important;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #ff0054 !important;
            text-shadow: 0 0 8px #ff0054;
        }

        .card {
            background: rgba(25, 25, 25, 0.9);
            border: 1px solid rgba(255, 0, 84, 0.3);
            box-shadow: 0 0 25px rgba(255, 0, 84, 0.4);
            backdrop-filter: blur(10px);
        }

        table {
            color: #fff;
        }

        thead {
            background: linear-gradient(90deg, #3a0ca3 0%, #ff0054 100%);
            color: white;
        }

        tbody tr {
            background: rgba(255, 255, 255, 0.03);
            transition: 0.3s;
        }

        tbody tr:hover {
            background: rgba(255, 0, 84, 0.1);
            transform: scale(1.01);
        }

        img {
            border: 2px solid #ff0054;
            box-shadow: 0 0 10px rgba(255, 0, 84, 0.6);
            border-radius: 8px;
        }

        .btn {
            border-radius: 10px;
            transition: 0.3s ease-in-out;
            font-weight: 500;
        }

        .btn-success {
            background: linear-gradient(90deg, #00f5d4, #00bbf9);
            border: none;
            color: #111;
            font-weight: 600;
        }

        .btn-success:hover {
            background: linear-gradient(90deg, #00bbf9, #00f5d4);
            box-shadow: 0 0 15px #00f5d4;
        }

        .btn-primary {
            background: linear-gradient(90deg, #3a0ca3, #7209b7);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #7209b7, #3a0ca3);
            box-shadow: 0 0 15px #7209b7;
        }

        .btn-danger {
            background: linear-gradient(90deg, #ff0054, #ff5400);
            border: none;
        }

        .btn-danger:hover {
            background: linear-gradient(90deg, #ff5400, #ff0054);
            box-shadow: 0 0 15px #ff0054;
        }

        h3 {
            color: #ff0054;
            text-shadow: 0 0 10px #ff0054;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">⚡ SistemCRUD</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-warning fw-bold" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>🧠 Data Keahlian</h3>
            <a href="{{ route('crud.create') }}" class="btn btn-success shadow">+ Tambah Data</a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body">
                <table class="table table-dark table-bordered align-middle text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Keahlian</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['keahlian'] }}</td>
                                <td>
                                    @if($item['foto'])
                                        <img src="{{ asset('uploads/'.$item['foto']) }}" width="60" class="rounded-3">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('crud.edit', $item['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('crud.delete', $item['id']) }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-muted">Belum ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
