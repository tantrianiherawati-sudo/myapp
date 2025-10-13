<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Kirim Pesan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
  <div class="container" style="max-width: 600px;">
    <h2 class="mb-3">Kirim Pesan</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('kirim.pesan') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="message" class="form-label">Pesan</label>
        <textarea name="message" id="message" rows="4" class="form-control" required>{{ old('message') }}</textarea>
      </div>
      <button class="btn btn-primary">Kirim</button>
      <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</body>
</html>
