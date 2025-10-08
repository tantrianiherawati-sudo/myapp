<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <h2 class="mb-3">Form Kirim Pesan</h2>

    <form action="/kirim-pesan" method="post">
        @csrf
        <div class="mb-3">
            <label for="message" class="form-label">Tulis Pesan:</label>
            <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

</body>
</html>
