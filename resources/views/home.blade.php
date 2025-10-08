<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku & Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <h2 class="text-center mb-4">📚 Daftar Buku</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book['judul'] }}</td>
                    <td>{{ $book['penulis'] }}</td>
                    <td>{{ $book['tahun'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr class="my-5">

    <h2 class="text-center mb-3">💬 Daftar Pesan (Anonim)</h2>

    @if (count($messages) > 0)
        <div class="list-group">
            @foreach ($messages as $msg)
                <div class="list-group-item">{{ $msg }}</div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info text-center">
            Belum ada pesan yang dikirim.
        </div>
    @endif

    <div class="text-center mt-3">
        <a href="/form" class="btn btn-primary">Kirim Pesan Baru</a>
    </div>

</body>
</html>
