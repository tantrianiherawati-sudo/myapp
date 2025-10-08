<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <h2 class="text-center mb-4">🏠 Halaman Home</h2>

    @if (isset($message))
        <div class="alert alert-success">
            <strong>Pesan yang kamu kirim:</strong> {{ $message }}
        </div>
    @else
        <div class="alert alert-info">
            Belum ada pesan yang dikirim. <a href="/form">Kirim sekarang</a>
        </div>
    @endif

</body>
</html>
